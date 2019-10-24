<<<<<<< HEAD
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        } else {
            $this->index();
        }
    }
=======
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class TestController extends CI_Controller {
>>>>>>> 1b83fe6180c3ae1028cec312c43d8fbc92c7eaf9

    public function index()
    {
        $this->load->view('Login');
        $this->load->view('Header');
        $this->load->view('Footer');
    }

    public function auth()
    {
        $username = $this->input->post('usertxt', true);
        $password = $this->input->post('passtxt', true);
        $validate = $this->login_model->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $id = $data['id'];
            $name  = $data['firsname'];
            $email = $data['email'];
            $level = $data['status_user'];
            $sesdata = array(
                'id' => $id,
                'firsname'  => $name,
                'email'     => $email,
                'status_user'     => $level,
                'logged_in' => true
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($level === '1' || $level === '2') {
                redirect('page');

<<<<<<< HEAD
                // access login for staff
            } elseif ($level === '0') {
                redirect('page/staff');

                // access login for author
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('TestController');
=======
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $user = $this->db->get('users', 1);
        if($user->num_rows() > 0)
        {
            $r = $user->row_array();
            /*echo '<br>';gg
            print_r($_SESSION);*/
            //$test = json_decode([$sess]);
           
           // echo '<script language="javascript">';
          // echo 'alert("ไอหมอนี่มันมีรหัสเว้ยไอห่า")';
           // echo '</script>';
            
            /*echo $test->UserID;
            console.log($test->UserID);
            redirect('/IndexController','refresh');*/

            $data = array(
                    'message' => $username
            );
          //  $this->session->set_userdate($data);

            $this->load->view('aaa');
        }
        
        if($user->num_rows() == 0){
            $this->db->where('email', $username);
            $this->db->where('password', $pass);
            $user = $this->db->get('users',1);
>>>>>>> 1b83fe6180c3ae1028cec312c43d8fbc92c7eaf9
        }
    }

<<<<<<< HEAD
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('homecontroller');
=======
            if($user->num_rows() > 0)
            {
                $r = $user->row_array();
                /*echo '<br>';
                print_r($_SESSION);*/
                //$test = json_decode([$sess]);
                $this->load->view('aaa');
                echo '<script language="javascript">';
                echo 'alert("ไอหมอนี่มันมีรหัสเว้ยไอห่า")';
                 echo '</script>';
                 $data = array(
                    'message' => $username
            );
            $this->session->set_userdata($data);
              //  echo '<script language="javascript">';
                //echo 'alert("ไอหมอนี่มันมีรหัสเว้ยไอห่า")';
              //  echo '</script>';
            }
            else
            {
                $this->load->view('bbb');
            }
        
>>>>>>> 1b83fe6180c3ae1028cec312c43d8fbc92c7eaf9
    }
}
