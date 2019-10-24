<?php

class Payment_model extends CI_Model
{

	public $img_detail;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('payname',$keyword);
		$this->db->from('payment');
		return $this->db->count_all_results();
	}

public function fetch_payment($limit, $start, $keryword)
	{
		$this->db->like('payname',$keryword);
		$this->db->limit($limit, $start);
		$this->db->select('payment.*');
		$this->db->from('payment');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $query->result_array();
		}
		return FALSE;
	}
	public function getid(){
		$this->session->userdata('logged_in');
        $user_id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * from order_detail
        JOIN orders ON orders.id = order_detail.orderid
        JOIN customers ON customers.id = orders.customerid
        JOIN users ON users.id = customers.id_users
        where users.id = $user_id");
       
        return $query->result_array();
	}






	// public function entry_payment($img_id)
	// {
	// 	$this->img_detail = $this->input->post('img_detail');
	// 	//$this->description = $this->input->post('description');
	// 	if($img_id == NULL)
	// 	{
	// 		$this->db->insert('img', $this);
	// 	}
	// 	else
	// 	{
	// 		$this->db->update('img', $this, array('img_id'=> $img_id));
	// 	}
	// }


/*
	public function read_payment($img_id){
		$this->db->where('img_id',$img_id);
		$query = $this->db->get('img');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	*/



public function read_payment($payid)
	{
		$this->db->select('payment.*');
		$this->db->from('payment');
		$this->db->where('payment.payid', $payid);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$data = $query->row_array();
			return $data;
		}
		return FALSE;
	}









	public function remove_payment($payid){
		$this->db->delete('payment',array('payid'=>$payid));
	}

	

}
