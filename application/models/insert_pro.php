<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_pro extends CI_Model {
    
    public function insert($data)
    {
        $this->db->insert('stock_tb', $data);
        
    }
    

}

/* End of file insert_pro.php */
