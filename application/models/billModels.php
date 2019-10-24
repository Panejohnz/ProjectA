<?php
defined('BASEPATH') or exit('No direct script access allowed');

class billModels extends CI_Model
{
    public function get_bill_from_id($orderid)
    {
        $this->db->where('orderid', $orderid);
        $query = $this->db->get('order_detail');
        return $query->result();
    }
    public function get_name_from_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('orders');
        return $query->result();
    }
    public function get_img_from_id($productid)
    {
        $this->db->where('productid', $productid);
        $query = $this->db->get('order_detail');
        return $query->result();
    }
   
    public function fetch_comments($data)
    {
      $query = $this->db->query("SELECT * FROM orders 
      JOIN order_detail ON order_detail.orderid = orders.id
      JOIN img ON img.img_id = order_detail.productid
      WHERE customerid = $data");
        return $query->result_array();
    }
}
