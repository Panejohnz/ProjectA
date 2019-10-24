<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisController extends CI_Controller
{
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
        //$userrja = $this->input->post('username');
        $pass1 = $this->input->post('password');
        $pass2 = $this->input->post('password1');
    
        $this->db->where('email', $email);
        // $emailja =  $this->db->get('users', 1);
        
           
        // $this->db->where('email', $email);
        // $this->db->where('username', $userrja);
        // $emailja =  $this->db->get('users', 1);
        // $userrja =  $this->db->get('users', 1);
        // if ($emailja->num_rows() > 0) {
        //     $this->load->view('bbb1');
        // } elseif ($userrja->num_rows() > 0) {
        //     $this->load->view('bbb1');
        if ($pass1 != $pass2) {
            $this->load->view('bbb1');
        } else {
            $data = array(
                'firsname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'password' => $this->input->post('password'),
                'status_user' => '0'
                );
            $this->load->model('insert_users');
            $this->insert_users->insert($data);
            $this->load->view('aaaa');
        }
    }
    public function checkmail()
    {
        $this->load->model("insert_users");
        if ($this->insert_users->is_email_available($_POST["email"])) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email มีคนใช้แล้ว</label>';
        } else {
            echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email ใช้ได้</label>';
        }
    }
    public function checkusername()
    {
        $this->load->model("insert_users");
        if ($this->insert_users->is_username_available($_POST["username"])) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> username มีคนใช้แล้ว</label>';
        } else {
            echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> username ใช้ได้</label>';
        }
    }
}
    
    
    //Loadingd View
   // $this->load->view('Register', $data);

?>  