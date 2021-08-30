<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{        
        $result = array('users' => $this->Users->listUsers());
        $this->load->view('layouts/header');
        $this->load->view('home',$result);
        $this->load->view('layouts/footer');
    }  

    
} 