<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class billModels extends CI_Model {
    
    
    
    public function get_bill_from_id($orderid){
       $this->db->where('orderid', $orderid);
       $query = $this->db->get('order_detail');
       return $query->result();
    }
    public function get_name_from_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('orders');
        return $query->result();
    }
    public function get_img_from_id($productid){
        $this->db->where('productid', $productid);
        $query = $this->db->get('order_detail');
        return $query->result();
    }
  
}

/* End of file insert_pro.php */
