<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sendcontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Library and model.
        $this->load->model('send_model');
        $this->load->library('pagination'); // โหลด pagination library

    }

    public function sending($id)
    {
        $this->db->where('id',$id);
        // $query = $this->db->get('orders');
        // $imf = $query->row_array();
      
       $data2 = array(
        'send' => $this->input->post('send')
      );
      //print_r($id);
    //   $this->db->where('id', $imf['orderid']);
       $this->db->update('orders',$data2);
       redirect('orders');
    }
    public function index()

    {
        $config = array();
        $config['base_url'] = base_url('sendcontroller/index');
        $config['total_rows'] = $this->send_model->record_count($this->input->get('keyword'));
        $config['per_page'] = $this->input->get('keyword') == null ? 14 : 999;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->send_model->fetch_Orders($config['per_page'], $page, $this->input->get('keyword'));
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
       // $result['his'] = $this->send_model->historybill();

        $data['link'] = $this->pagination->create_links();

        $this->load->view('template/backheader');
        $this->load->view('send_view', $data);
        $this->load->view('template/backfooter');
    }
    public function update_status()  //สถานะ
    {
        if (isset($_REQUEST['sval'])) {
            $this->load->model('send_model','sendcontroller');
            $up_status = $this->sendcontroller->update_status();
            if ($up_status > 0) {
                $this->session->set_flashdata('msg', "updated success");
                $this->session->set_flashdata('msg_class', "alert-success");
            } else {
                $this->session->set_flashdata('msg', ";not updated success");
                $this->session->set_flashdata('msg_class', "alert-danger");
            }
            return redirect('sendcontroller');
        }
    }
}
