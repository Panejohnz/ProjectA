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
            $email = $this->input->post('email');


            $this->db->where('email', $email);
            $emailja =  $this->db->get('users',1);
            
            if($emailja->num_rows() > 0){
                echo '<script language="javascript">';
                echo 'alert("ไอหมอนี่มันคิดเองไม่เป็นว่าไอห่า")';
                echo '</script>';
            }
            else{
        
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
            $this->load->view('aaa');
        }
            
            
            
    
    //Loading View
   // $this->load->view('Register', $data);

        
}
}
