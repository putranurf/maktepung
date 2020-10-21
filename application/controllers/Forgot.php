<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->helper('url');
    }

	// public function index()
	// {
	// 	$this->load->view('auth/login');
    // }
    
    function index()
    {
        $this->load->view('auth/forgot_password');
    }
}
