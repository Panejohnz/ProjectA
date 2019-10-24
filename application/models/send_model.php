<?php
class send_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function record_count($keyword)
    {
        $this->db->like('orderid', $keyword);
        $this->db->from('order_detail');
        return $this->db->count_all_results();
    }
    public function inserto()
    {
        
        $this->send = $this->input->post('send');
        
        $this->db->update('orders');
    }
    public function fetch_orders($limit, $start, $keryword)
    {
        $this->db->like('order_detail.orderid', $keryword);
        $this->db->limit($limit, $start);
        $this->db->where('orders.id = order_detail.orderid');

        $query = $this->db->get('orders,order_detail');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function historybill()
    {
        //$this->session->userdata('logged_in');
        //$user_id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * from order_detail
        JOIN orders ON orders.id = order_detail.id
		Where order_detail.status
       ");
       
        return $query->result_array();
    }
    public function update_status() //สถานะ
    {
        $id = $_REQUEST['sid'];
        $saval = $_REQUEST['svalo'];
        if ($saval == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $data = array(
            'status'=> $status
        );
        $this->db->where('id', $id);
        return $this->db->update('order_detail', $data);
    }
}
