<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

       $this->load->model('welcome_model', 'w_model', true);
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
         $data['all_logo'] = $this->w_model->select_all_logo();
        $this->load->view('admin/login', $data);
    }
}