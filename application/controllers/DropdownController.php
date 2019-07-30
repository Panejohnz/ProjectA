<?php 





defined('BASEPATH') OR exit('No direct script access allowed');

class DropdownController extends CI_Controller {

    function __construct()
    {
            parent::__construct();
            $this->load->helper('form');
    }

    public function index()
    {
        //$this->load->view('Header');
        $this->load->view('manage');
        $this->load->model('insert_pro');
        $this->load->view('Dropdown');
        $this->load->view('Footer');
        $this->load->library('form_validation');
        $this->load->database();
        
        
    }
  

    public function Dropdown()
    {
       
        $data = array(
            
            'name_product' => $this->input->post('pro_name1'),
            'category_product' => $this->input->post('pro_name2'),
            'detail_product' => $this->input->post('pro_detail'),
            'price_product' => $this->input->post('pro_price_cost'),
            'amount_product' => $this->input->post('pro_qty'),            
            //'img_product' => $this->upload->do_upload('pro_img')
            );
              

            $this->load->model('insert_pro');
            $this->insert_pro->insert($data);
            $this->load->view('aaa');
        
        
        $name = $this->input->post('name_product');
        $cat = $this->input->post('category_product');
        $detail = $this->input->post('detail_product');
        $price = $this->input->post('price_product');
        $amount = $this->input->post('amount_product');
      //  $image = $this->upload->do_upload('img_product');



    }  
    /*public function add_image()
    {
     // CI form validation
     $this->form_validation->set_rules('img_product', 'Image Name', 'required');
     if ($this->form_validation->run() == FALSE){
      $this->load->view('bbb');
           }
     else {
      // configurations from upload library
      $config['upload_path'] = './assets/images';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2048000'; // max size in KB
      $config['max_width'] = '20000'; //max resolution width
      $config['max_height'] = '20000';  //max resolution height
      // load CI libarary called upload
      $this->load->library('upload', $config);
      // body of if clause will be executed when image uploading is failed
      if(!$this->upload->do_upload()){
       $errors = array('error' => $this->upload->display_errors());
       // This image is uploaded by deafult if the selected image in not uploaded
       $image = 'no_image.png';    
      }
      // body of else clause will be executed when image uploading is succeeded
      else{
       $data = array('upload_data' => $this->upload->data());
       $image = $_FILES['userfile']['name'];  //name must be userfile
       
      }
      $this->Image_model->insert_image($image);
      $this->session->set_flashdata('success','Image stored');
      redirect('Image');
     }
    }
    // view images fetched from database
    public function view_images()
    {
     $data['images'] = $this->Image_model->get_images();
     $this->load->view('image_view', $data);
    }*/



}