<?php

class Orders_model extends CI_Model
{

	public $name;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('id', $keyword);
		$this->db->from('customers');
		return $this->db->count_all_results();
	}

	public function fetch_orders($limit, $start, $keryword)
	{

		$this->db->like('orders.id', $keryword);
		$this->db->limit($limit, $start);
		$this->db->where('customers.id = orders.customerid ');

		$query = $this->db->get('orders,customers');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function entry_orders($customers_id)
	{
		$this->name = $this->input->post('name');
		$this->email = $this->input->post('email');
		$this->address = $this->input->post('address');
		$this->phone = $this->input->post('phone');
		//$this->description = $this->input->post('description');
		if ($customers_id == NULL) {
			$this->db->insert('customers', $this);
		} else {
			$this->db->update('customers', $this, array('customers_id' => $customers_id));
		}
	}
	public function read_orders($customers_id)
	{
		$this->db->where('customers_id', $customers_id);
		$query = $this->db->get('customers');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_orders($customers_id)
	{
		$this->db->delete('orders', array('id' => $customers_id));
	}
	public function update_status() //สถานะ
	{
		$id = $_REQUEST['sid'];
		$saval = $_REQUEST['sval'];
		if($saval == 1){
			$status = 0;
		}else{
			$status = 1;
		}
		$data = array(
			'status'=> $status
		);
		$this->db->where('id', $id);
		return $this->db->update('orders', $data);
		
		
	}
}
