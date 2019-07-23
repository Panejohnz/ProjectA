<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DropdownController extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        //$this->load->view('manage');
        $this->load->model('insert_pro');
        $this->load->view('Dropdown');
        $this->load->view('Footer');
        $this->load->library('form_validation');
        
        
        
    }

    public function Dropdown()
    {

        $data = array(
            'name_product' => $this->input->post('pro_name'),
            'category_product' => $this->input->post('pro_name1'),
            'detail_product' => $this->input->post('pro_detail'),
            'price_product' => $this->input->post('pro_price_cost'),
            'amount_product' => $this->input->post('pro_qty'),
            'img_product' => $this->input->post('pro_img')
            );


            $this->load->model('insert_pro');
            $this->insert_pro->insert($data);
            $this->load->view('aaa');
        
        
        $name = $this->input->post('name_product');
        $cat = $this->input->post('category_product');
        $detail = $this->input->post('detail_product');
        $price = $this->input->post('price_product');
        $amount = $this->input->post('amount_product');
        $image = $this->input->post('img_product');



    }


    

}