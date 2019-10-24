<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        // Load facebook library
        $this->load->library('facebook');
        
        //Load user model
        $this->load->model('user');
        $this->load->model('login_model');
    }
    
    public function index()
    {
        $userData = array();
        $userdata1 = array();
        $this->load->model('user', 'login_model', true);
        // Check if user is logged in
        if ($this->facebook->is_authenticated()) {
            // Get user facebook profile details
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userdata1['oauth_uid']    = !empty($fbUser['id'])?$fbUser['id']:'';
            
            $userdata1['firsname']    = !empty($fbUser['first_name'])?$fbUser['first_name']:'';
            $userData['first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:'';
            $userdata1['lastname']    = !empty($fbUser['last_name'])?$fbUser['last_name']:'';
            $userData['last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:'';
            $userdata1['email']        = !empty($fbUser['email'])?$fbUser['email']:'';
            $userdata1['gender']        = !empty($fbUser['gender'])?$fbUser['gender']:'';
            $userdata1['picture']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:'';
            $userData['link']        = !empty($fbUser['link'])?$fbUser['link']:'';
            
            $username = $userdata1['firsname'];
            $email = $userdata1['email'];
            $picture = $userdata1['picture'];

            $this->db->where('firsname',$username);
            $query = $this->db->get('users');
            $imf = $query->row_array();

            if($userdata1['firsname'] == $imf['firsname'] ){
                $sesdata = array(
                'id' => $imf['id'],
                'firsname'  => $username,
                'email'  => $email,
                'status'     => '0',
                'logged_in' => true,
                'picture' => $picture
            );
            $this->session->set_userdata($sesdata);
            }else{
                

                $userID = $this->user->checkUser($userData, $userdata1);
                $sesdata = array(
                    'id' => $imf['id'],
                    'firsname'  => $username,
                    'email'  => $email,
                    'status'     => '0',
                    'logged_in' => true,
                    'picture' => $picture
                );
                $this->session->set_userdata($sesdata);

            }
         

            
            // Insert or update user data
           
            
            // Check user data insert or update status
            // if ($userID) {
            //     $data['userData'] = $userData;
            //     $this->session->set_userdata('userData', $userData);
            // } else {
            //     $data['userData'] = array();
            // }
            
            // Get logout URL
            $data['logoutURL'] = $this->facebook->logout_url();
        } else {
            // Get login URL
            $data['authURL'] =  $this->facebook->login_url();
        }
        
        // Load login & profile view
        $this->load->view('user_authentication/index', $data);
    }
   

    public function logout()
    {
        // Remove local Facebook session
        $this->facebook->destroy_session();
        // Remove user data from session
        $this->session->unset_userdata('userData');
        // Redirect to login page
        redirect('testcontroller');
    }
}
