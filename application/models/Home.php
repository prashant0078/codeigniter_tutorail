<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model{

    function getWelcomeMessage($name = "User"){

        return "Welcome ".$name."!!!";
    }

    function getUsers(){
        $result = array();
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where('status' , '1');
        $query = $this->db->get();
        if($query->num_rows()){
            $result = $query->result_array();
        }
        return $result;
    }
}