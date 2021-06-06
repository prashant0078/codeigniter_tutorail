<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    function insertUser($args = array()){
        $insert_id = 0;
        if(!empty($args)){
            $this->db->insert('users' , $args);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }
    }

    function getUser($email = NULL , $password = NULL){
        $result = array();
        if(!empty($email) && !empty($password)){
            $this->db->select('name , email');
            $this->db->from('users');
            $this->db->where('status' , '1');
            $this->db->where('email' , $email);
            $this->db->where('password' , md5($password));
            $query = $this->db->get();
            if($query->num_rows()){
                $result = $query->row_array();
            }
        }
        return $result;
    }
}