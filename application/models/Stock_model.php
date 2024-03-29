<?php

class Stock_model extends CI_Model
{

	public $img_detail;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('img_name',$keyword);
		$this->db->from('img');
		return $this->db->count_all_results();
	}

public function fetch_stock($limit, $start, $keryword)
	{
		$this->db->like('img_name', $keryword);
        $this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->where('img_stock <','5');
		$query = $this->db->get('img');
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






	public function entry_stock($img_id)
	{
		$this->img_detail = $this->input->post('img_detail');
		//$this->description = $this->input->post('description');
		if($img_id == NULL)
		{
			$this->db->insert('img', $this);
		}
		else
		{
			$this->db->update('img', $this, array('img_id'=> $img_id));
		}
	}


/*
	public function read_prd($img_id){
		$this->db->where('img_id',$img_id);
		$query = $this->db->get('img');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	*/



public function read_stock($img_id)
	{
		$this->db->select('img.*');
		$this->db->from('img');
		$this->db->where('img.img_id', $img_id);

		
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$data = $query->row_array();
			return $data;
		}
		return FALSE;
	}









	public function remove_stock($img_id){
		$this->db->delete('img',array('img_id'=>$img_id));
	}

	

}
