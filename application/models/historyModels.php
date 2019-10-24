<?php
class historyModels extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function historybill()
    {
        $this->session->userdata('logged_in');
        $user_id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * from order_detail
        JOIN orders ON orders.id = order_detail.orderid
        JOIN customers ON customers.id = orders.customerid
        JOIN users ON users.id = customers.id_users
        where users.id = $user_id");
       
        return $query->result_array();

  

        
    }
}
