<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_login extends CI_Controller {
    

    public function __construct() {
        parent::__construct();
      $this->load->model('welcome_model', 'w_model', true);
     
    }

    public function index() {
        $data = array();
          $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Log In Form';
        $this->load->view('site/login');
    }
     public function admin_login() {
        $data = array();
          $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/login');
    }

    public function check_login() {
      
        $email_address=$this->input->post('admin_email_address',true);
        $password=$this->input->post('admin_password',true);
        
        //echo '----'.$email_address.'-----'.$password;
        //exit();
        
        
        $this->load->model('admin_login_model','al_model',true);
        $result=$this->al_model->select_user($email_address,$password);
       // echo '<pre>';
       // print_r($result);
        if($result)
        {
           
            $user_status=$result->user_status;
            $status=$result->status;
            if($status=='user'){
               if($user_status=='active'){
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['user_id']=$result->user_id;
            $data['message']="Successfully Login ";
            $this->session->set_userdata($data);
            redirect("user");
            }else{
            $sdata=array();
            $sdata['all_logo'] = $this->w_model->select_all_logo();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            $this->load->view('site/login', $sdata);    
            } 
            }else{
                 $sdata=array();
             $sdata['all_logo'] = $this->w_model->select_all_logo();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            $this->load->view('site/login', $sdata);
            }
            
        }
        else{
            $sdata=array();
             $sdata['all_logo'] = $this->w_model->select_all_logo();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            $this->load->view('site/login', $sdata);
        }
      
         
    }
     public function check_admin_login() {
        
        $email_address=$this->input->post('admin_email_address',true);
        $password=$this->input->post('admin_password',true);
        $status='admin';
        
        //echo '----'.$email_address.'-----'.$password;
        //exit();
        
        
        $this->load->model('admin_login_model','al_model',true);
        $result=$this->al_model->select_admin($email_address,$password,$status);
       // echo '<pre>';
       // print_r($result);
        if($result)
        {
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['message']="Successfully Login ";
            $this->session->set_userdata($data);
            redirect("super_admin");
        }
        else{
            $sdata=array();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
             $this->load->view('admin/login', $sdata);
        }
      
         
    }
       public function login() {
        $data = array();
        $data['title'] = 'Header Details';
    
         $this->load->view('admin/admin_login', $data);
         
       }
       public function logout() {
        $this->session->unset_userdata('admin_id');
        $ldata = array();
        $ldata['message'] = "<b>You are successfully logged out!</b>";
        $this->session->set_userdata($ldata);
        redirect("welcome/login");
    }
      public function admin_logout() {
        $this->session->unset_userdata('admin_id');
        $ldata = array();
        $ldata['message'] = "<b>You are successfully logged out!</b>";
        $this->session->set_userdata($ldata);
        redirect("admin");
    }
         
    

}

?>