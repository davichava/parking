<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Create_Users extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('edit_users');
        $this->load->view('layouts/footer');
    }
}