<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $query=$this->db->query("SELECT *
                                 FROM img 
                                 ORDER BY img_id ASC");
        return $query->result_array();
    }

    // Insert customer details in "customer" table in database.
    public function insert_customer($data)
    {
        $this->db->insert('customers', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    // Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    // Insert ordered product detail in "order_detail" table in database.
    public function insert_order_detail($data)
    {
        $this->db->insert('order_detail', $data);
    }
    public function getAllData() 
    { 
      $query = $this->db->query('SELECT * FROM img'); 
      return $query->num_rows();
    }
    public function getPageData($page,$per_page)
    { 
      $query = $this->db->query('SELECT * FROM img ORDER BY img_id DESC LIMIT '.$page.','.$per_page); 
      if($query->num_rows() > 0 ) {
        return $query->result_array();
      } else {
        return array();
      }
    }

    public function getJoinOrder($data)
    {
      if ($data == null){
        $data = 1;
      }
    

      $query = $this->db->query("SELECT * FROM orders 
      JOIN order_detail ON order_detail.orderid = orders.id
      JOIN img ON img.img_id = order_detail.productid
      WHERE customerid = $data");
      return $query->result_array();
    }
}