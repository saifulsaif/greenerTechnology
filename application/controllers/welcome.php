<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'a_model', true);
        $this->load->model('welcome_model', 'w_model', true);
        $this->load->model('user_model', 'u_model', true);
        $this->load->model('super_admin_model', 'sa_model', true);
        $admin_id = $this->session->userdata('admin_id');
      
 $this->load->model("welcome_model");
  $this->load->helper("url");
  $this->load->helper('form');;
        
    }

    public function index() {
        $data = array();
         $data['all_blog'] = $this->w_model->select_all_blog();
        $data['all_slider'] = $this->w_model->select_all_slider();
        $data['all_artists'] = $this->sa_model->select_all_artists();
        $data['all_about'] = $this->w_model->select_all_about();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_counter'] = $this->w_model->select_all_counter();
        $data['all_testimonial'] = $this->w_model->select_all_testimonial();
         $data['all_partner'] = $this->w_model->select_all_partner();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $this->load->view('index', $data);
    }
     public function about() {
        $data = array();
        $data['all_artists'] = $this->sa_model->select_all_artists();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['all_about'] = $this->w_model->select_all_about();
        $data['all_blog'] = $this->w_model->select_all_blog();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $this->load->view('site/about', $data);
    }
    public function artiest() {
        $data = array();
        $data['all_artists'] = $this->sa_model->select_all_artists();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_blog'] = $this->w_model->select_all_blog();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $this->load->view('site/artiest', $data);
    }
     public function view_artists($artists_id) {
        $data = array();
        $data['all_view_artists'] = $this->sa_model->select_all_view_artists($artists_id);
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_blog'] = $this->w_model->select_all_blog();
        $this->load->view('site/view_artists', $data);
    }
     public function project() {
        $data = array();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_blog'] = $this->w_model->select_all_blog();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $this->load->view('site/gallery', $data);
    }
     
   public function service() {
        $data = array();
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
         $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
         $data['all_logo'] = $this->w_model->select_all_logo();
         $data['all_blog'] = $this->w_model->select_all_blog();
        $this->load->view('site/product', $data);
    }
     public function blog() {
        $data = array();
         $data['all_blog'] = $this->w_model->select_all_blog();
        $data['all_contact'] = $this->w_model->select_all_contact();
         $data['all_logo'] = $this->w_model->select_all_logo();
         $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $this->load->view('site/blog', $data);
    }
     public function single_blog($blog_id) {
        $data = array();
         $data['all_blog'] = $this->w_model->select_all_blog();
         $data['all_single_blog'] = $this->w_model->select_all_single_blog($blog_id);
        $data['all_contact'] = $this->w_model->select_all_contact();
         $data['all_logo'] = $this->w_model->select_all_logo();
         $data['all_gallery'] = $this->sa_model->select_all_gallery();
         $data['all_blog'] = $this->w_model->select_all_blog();
        $this->load->view('site/single_blog', $data);
    }
     public function contact() {
        $data = array();
        $data['all_contact'] = $this->w_model->select_all_contact();
         $data['all_logo'] = $this->w_model->select_all_logo();
         $data['all_blog'] = $this->w_model->select_all_blog();
         $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $this->load->view('site/contact', $data);
    }
 
   
}
