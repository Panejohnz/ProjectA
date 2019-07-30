<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_pro extends CI_Model {
    
    public function insert($data)
    {
        $this->db->insert('stock_tb', $data);
        $query = $this->db->get('stock_tb');
        if($query->num_rows()>0){
            return $query->result();
        }
               
    }
  
}

/* End of file insert_pro.php */
