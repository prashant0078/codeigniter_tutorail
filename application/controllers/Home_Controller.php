<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        if(!$this->session->has_userdata('user')){
            redirect(base_url('login') , 'refresh');
        }
    }
	public function index()
	{
        $data = array();
		$this->load->view('home' , $data);
	}
    public function logout(){
        $this->session->unset_userdata('user');
        session_destroy();
        redirect(base_url('login') , 'refresh');
    }
}
