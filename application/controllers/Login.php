<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    function index(){
        $data = array();
        $this->load->view('login' , $data);
    }

    function submitLogin(){
        $email = $this->input->post('email' , true);
        $password = $this->input->post('password' , true);
        $user      = $this->User->getUser($email , $password);
        if(!empty($user)){
            echo 'Success Logged in';
            echo "<pre>";
            print_r($user);
        }else{
            echo "Record not found";
        }
    }
}