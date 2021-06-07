<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        if($this->session->has_userdata('user')){
            redirect(base_url('home') , 'refresh');
        }
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
            $this->session->set_userdata("user" , $user);
            redirect(base_url('home') , 'refresh');

        }else{
            echo "Record not found";
        }
    }
}