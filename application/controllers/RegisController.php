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
            $userrja = $this->input->post('username');
            $pass1 = $this->input->post('password');
            $pass2 = $this->input->post('password1');
    
            if($pass1 != $pass2){
               $this->load->view('bbb1');
            }
            else{
                
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


            $this->db->where('email', $email);
            $emailja =  $this->db->get('users',1);
            
           
        $this->db->where('email', $email);
        $this->db->where('username', $userrja);
            $emailja =  $this->db->get('users',1);
            $userrja =  $this->db->get('users',1);
            if($emailja->num_rows() < 0){
                $this->load->view('bbb1');
           
            }
        else if($userrja->num_rows() < 0){
               $this->load->view('bbb1');
      }
           
    }
    
       
    
    //Loadingd View
   // $this->load->view('Register', $data);

        
}

