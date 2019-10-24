<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_users extends CI_Model {
    
    function is_email_available($email)  
    {  
         $this->db->where('email', $email);  
         $query = $this->db->get("users");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
    }  
    function is_username_available($username)  
    {  
         $this->db->where('username', $username);  
         $query = $this->db->get("users");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
    }  
    public function insert($data)
    {
        $this->db->insert('users', $data);


        
        
    }
    
<<<<<<< HEAD
}  
=======
    
>>>>>>> 1b83fe6180c3ae1028cec312c43d8fbc92c7eaf9

