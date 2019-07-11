<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisController extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Footer');
        $this->load->view('Register');
        $this->load->model('insert_users');
        $this->load->library('form_validation');
    }

    public function Register()
    {

            //Setting values for tabel columns
            $data = array(
            'firsname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'password' => $this->input->post('password')
            );
            $this->load->model('insert_users');
            
            $this->insert_users->insert($data);
            echo 'Data Inserted Successfully';
    
            
            
            
    
    //Loading View
   // $this->load->view('Register', $data);

        
}
