<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{

    public function __construct()
    {
        return parent::__construct();
    }


    public function index()
    {
        $this->load->view('login');
    }
}