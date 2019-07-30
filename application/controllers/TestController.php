<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class TestController extends CI_Controller {

    public function index()
    {   
        $this->session->userdata('message');
        $this->load->view('Login');
        $this->load->view('Header');
        $this->load->view('Footer');
       
     
    }
    public function Login()
    {
        $username =  $this->input->post('usertxt');
        $pass =  $this->input->post('passtxt'); 

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
        }

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
        
    }
}
    


/* End of file TestController.php */
