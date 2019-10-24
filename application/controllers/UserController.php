<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {


    public function __construct()
    {
  
      parent::__construct();
      //Load Library and model.  
    //    if(!$this->session->userdata('firsname')){ //ดัก user บังคับล็อกอิน
    //     redirect('TestController');
    // }
  
    }


    public function index()
    {
        //$this->load->view('Header');
        $this->load->view('userhome');
       // $this->load->view('Footer');
        
       
       
    }
}