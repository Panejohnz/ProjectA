<?php

class Member_model extends CI_Model
{

    public $firsname;
    //public $description;

    public function __construct()
    {
        parent::__construct();
    }

    public function record_count($keyword)
    {
        $this->db->like('firsname', $keyword);
        $this->db->from('users');
        return $this->db->count_all_results();
    }

    public function fetch_member($limit, $start, $keryword)
    {
        $this->db->like('firsname', $keryword);
        $this->db->limit($limit, $start);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_member($user_id)
    {
        $this->firsname = $this->input->post('firsname');
        $this->lastname = $this->input->post('lastname');
        //$this->brithday = $this->input->post('brithday');
        $this->gender = $this->input->post('gender');
        //$this->address = $this->input->post('address');
        $this->email = $this->input->post('email');
        //$this->tel = $this->input->post('tel');
        $this->username = $this->input->post('username');
        $this->password = $this->input->post('password');
        $this->status_user = $this->input->post('status_user');
        //$this->description = $this->input->post('description');
        if ($user_id == NULL) {
            $this->db->insert('users', $this);
        } else {
            $this->db->update('users', $this, array('id' => $user_id));
        }
    }
    public function read_member($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }
    public function remove_member($user_id)
    {
        $this->db->delete('users', array('id' => $user_id));
    }
}
