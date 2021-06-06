<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    function index(){
        $data = array();
        $this->load->view('register' , $data);
    }

    function submitRegister(){
        $name = $this->input->post('name' , true);
        $email = $this->input->post('email' , true);
        $password = $this->input->post('password' , true);
        $cpassword = $this->input->post('cpassword' , true);
        if($password != $cpassword){
            echo "Password dose not match";
        }else{
        $args = array(
            "name" => $name,
            "email" => $email,
            "password" => md5($password),
            "status" => "1"
        );
        $insert_id = $this->User->insertUser($args);
        if($insert_id){
            echo "Registered";
        }else{
            echo "Some error occured";
        }
       }
    }
}