<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

public function _remap($method, $params = array())
{
	if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }else{
	        $this->index();	
        }
    }

    function index()
    {
        $this->load->view('Login');
        $this->load->view('Header');
        $this->load->view('Footer');
    }

    function auth()
    {
        $username = $this->input->post('usertxt', TRUE);
        $password = $this->input->post('passtxt', TRUE);
        $validate = $this->login_model->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $name  = $data['firsname'];
            $email = $data['email'];
            $level = $data['status'];
            $sesdata = array(
                'firsname'  => $name,
                'email'     => $email,
                'status'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($level === '1') {
                redirect('page');

                // access login for staff
            } elseif ($level === '0') {
                redirect('page/staff');

                // access login for author
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('TestController');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('homecontroller');
    }
}
