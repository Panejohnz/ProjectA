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
            $userr = $this->input->post('username');
            $pass1 = $this->input->post('password');
            $pass2 = $this->input->post('password1');
    
            if($pass1 != $pass2){
               $this->load->view('bbb');
            }

            
            else{$data = array(
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
        $this->db->where('email', $email);
        $this->db->where('username', $userr);
            $emailja =  $this->db->get('users',1);
            $userr =  $this->db->get('users',1);
            if($emailja->num_rows() > 0){
                $this->load->view('bbb1');
           
            }
            else if($userr->num_rows() > 0){
                $this->load->view('bbb1');
            }
    }
    
       
    
    //Loading View
   // $this->load->view('Register', $data);

        
}

