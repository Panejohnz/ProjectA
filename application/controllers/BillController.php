<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BillController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Library and model.
        $this->load->library('cart');
        $this->load->model('Cart_model');
        $this->load->model('billModels');
        $this->load->library('pagination'); // โหลด pagination library
    }

    public function test()
    {
        $this->db->order_by('id', 'DESC');
        $id = $this->db->get('orders', 1);
        $aa = $id->row_array();
        $this->data['id'] = $aa['id'];

        $customer = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'phone' => $this->input->post('phone'),
      'id_users' =>  $this->session->userdata('id'),
     
    );

        $cust_id = $this->Cart_model->insert_customer($customer);

        $order = array(
      'date' => date('Y-m-d'),
      'customerid' => $cust_id,
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'phone' => $this->input->post('phone'),
      'status' => '0'
      
    );
        $ord_id = $this->Cart_model->insert_order($order);
        if ($cart = $this->cart->contents()) :
      foreach ($cart as $item) :
        $order_detail = array(
          'orderid' => $ord_id,
          'productid' => $item['id'],
          'quantity' => $item['qty'],
          'price' => $item['price'] * $item['qty'],
        );

        // Insert product imformation with order detail, store in cart also store in database.

        $cust_id = $this->Cart_model->insert_order_detail($order_detail);
        endforeach;
        endif;


    
        // $this->session->set_flashdata('message', 'Transaction is Finished');
     
        // if ($cart = $this->cart->contents()) :
        // foreach ($cart as $item) :
        //   $this->db->set('img_stock', 'img_stock-' . $item['qty'], false);
        // $this->db->where('img_id', $item['id']);
        // $this->db->update('img');
        // // redirect('BillController/save_order');

        // endforeach;
        // endif;



        // $this->cart->destroy();

        $test = $this->Cart_model->getJoinOrder($ord_id);

    
        $data['bill'] = $test;

        $data['id'] = $aa['id'];
        // var_dump($data['bill']);
        $total = 0;

        foreach ($test as $item) :
      $total = $total + $item['price'];
        endforeach;

        $data['total'] = $total;
        // $data['firsname'] = $this->session->userdata('firsname');

        $this->load->view('billing_success', $data);
        ##########################################################
   

    // redirect('BillController/test','refresh');

    // $this->load->view('Footer');
    }
 
    public function get_bill_from_id($orderid)
    {
        $this->db->where('orderid',$orderid);
        $query = $this->db->get('order_detail');
        $imf = $query->row_array();
      
        $data['name'] = $this->billModels->get_name_from_id($orderid);
        $data['result'] = $this->billModels->get_bill_from_id($orderid);
        $test = $this->Cart_model->getJoinOrder($orderid);


        $data['bill'] = $test;

        // $data['id'] = $aa['id'];
        // var_dump($data['bill']);
        $total = 0;

        foreach ($test as $item) :
      $total = $total + ($item['price'] * $item['quantity']);
        endforeach;

        $data['total'] = $total;
        // $data['firsname'] = $this->session->userdata('firsname');

        $this->load->view('billing_id', $data);
    }
    public function get_bill_fromid($id)
    {
        $data['info'] = $this->My_model->information($id);
        $this->load->view('billing_id', $data);
    }
    public function paybill($id){
      $test = $this->Cart_model->getJoinOrder($id);
      $data['bill'] = $test;

       
        // var_dump($data['bill']);
        $total = 0;

        foreach ($test as $item) :
      $total = $total + $item['price'];
        endforeach;

        $data['total'] = $total;
        // $data['firsname'] = $this->session->userdata('firsname');

        $this->load->view('billing_success', $data);
    }
}
