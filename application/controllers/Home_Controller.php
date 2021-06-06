<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function index()
	{
        $data = array();
		$this->load->view('home' , $data);
	}


    function login(){
        echo "this is login";
    }

    function register(){
        echo "this is register";
    }
}
