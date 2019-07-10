<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_users extends CI_Model {
    
    public function insert($data)
    {
        $this->db->insert('users', $data);
        
    }
    

}

/* End of file insert_users.php */
