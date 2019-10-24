<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        $this->tableName = 'usersface';
        $this->primaryKey = 'id';
    }
    
    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData, $userdata1)
    {
        if (!empty($userData)) {
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userdata1['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if ($prevCheck > 0) {
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            } else {
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();

                $userdata1['id'] = $userID;
                $this->db->insert('users',  $userdata1);
                return $insert_id = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:false;
    }
 
}
