<?php

session_start();

class Super_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        static $data;

        $this->load->model('admin_model', 'a_model', TRUE);
        $this->load->model('super_admin_model', 'sa_model', TRUE);
        $this->load->model('welcome_model', 'w_model', true);
        $this->load->model('user_model', 'u_model', true);
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            $sdata = array();
            $sdata['exception'] = "Plase Enter UserName & Password! ";
            $this->session->set_userdata($sdata);
            redirect('admin', 'refresh', $sdata);
        }
    }

    private static $maincontent = null;

    public function index() {
        $data = array();
        $data['test'] = "test text";
        
        $user_id= $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
   
        $data['content'] = $this->load->view('admin/maincontent', $data, true);
        $this->load->view('admin/index', $data);
    }
   
      public function user(){
         $admin_user_id = $this->session->userdata('admin_id');
        $data['all_admin'] = $this->sa_model->select_all_admin($admin_user_id);
        $user_id='0';
        foreach ($data['all_admin'] as $user){
         $user_id= $user->user_id;
        }
        return $user_id ;
    }

    // site dynamic from here
    
    
    
    public function load_index(){
         $data = array();
        $data['test'] = "test text";
        $data['all_logo'] = $this->w_model->select_all_logo();
      
    }
    
    public function logo() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
   
    $this->load_index();
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['content'] = $this->load->view('admin/site/logo', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_logo() {
        $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/logo');
        } else {
            $fdata = $this->upload->data();
            $data['logo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $this->w_model->save_logo_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/logo');
        }
    }

    public function delete_logo($logo_id) {
        $this->w_model->delete_logo_info_by_logo_id($logo_id);
        $data = array();
        $data['message'] = "Logo delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/logo');
    }

    public function edit_logo($logo_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_slider'] = $this->w_model->select_all_slider();
        $data['logo_info'] = $this->sa_model->select_logo_info_by_logo_id($logo_id);
        $data['content'] = $this->load->view('admin/site/edit_logo', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_logo() {
             $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['logo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $logo_id = $this->input->post('logo_id', true);
        $this->sa_model->update_logo_info($data, $logo_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_logo/' . $logo_id);
        }
 public function partner() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
      $data['all_logo'] = $this->w_model->select_all_logo();
    $this->load_index();
    $data['all_partner'] = $this->w_model->select_all_partner();
    $data['content'] = $this->load->view('admin/site/partner', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_partner() {
        $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/partner');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
             $data['link']=$this->input->post('link',ture);
            $this->w_model->save_partner_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/partner');
        }
    }

    public function delete_partner($partner_id) {
        $this->w_model->delete_partner_info_by_partner_id($partner_id);
        $data = array();
        $data['message'] = "Partner delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/partner');
    }

    public function edit_partner($partner_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_partner'] = $this->w_model->select_all_partner();
       $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_slider'] = $this->w_model->select_all_slider();
        $data['partner_info'] = $this->sa_model->select_partner_info_by_partner_id($partner_id);
        $data['content'] = $this->load->view('admin/site/edit_partner', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_partner() {
             $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $partner_id = $this->input->post('partner_id', true);
         $data['link']=$this->input->post('link',ture);
        $this->sa_model->update_partner_info($data, $partner_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_partner/' . $partner_id);
        }


     public function main_portfolio() {
     $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $this->load_index();
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_artists'] = $this->sa_model->select_all_artists();
    $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
    $data['content'] = $this->load->view('admin/site/portfolio', $data, true);
    $this->load->view('admin/index', $data);
    }

   public function save_main_portfolio() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/main_portfolio');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['name']=$this->input->post('name',ture);
            $data['link']=$this->input->post('link',ture);
            $data['artiest']=$this->input->post('artiest',ture);
            $this->sa_model->save_main_portfolio_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/main_portfolio');
        }
    }
    public function delete_main_portfolio($id) {
        $this->sa_model->delete_main_portfolio_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/main_portfolio');
    
    }

    public function edit_main_portfolio($id) {
        $data = array();
        $user_id = $this->user();
        $data['all_artists'] = $this->sa_model->select_all_artists();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
        $data['portfolio_info'] = $this->sa_model->select_main_portfolio_info_by_main_portfolio_id($id);
        $data['content'] = $this->load->view('admin/site/edit_portfolio', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_main_portfolio() {
             $data = array();
             $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);
        $data['name']=$this->input->post('name',ture);
        $data['artiest']=$this->input->post('artiest',ture);
        $data['link']=$this->input->post('link',ture);
        $this->sa_model->update_portfolio_info($data, $id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_main_portfolio/' . $id);
        }
    
        
    
     public function about() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
  
    $this->load_index();
    $data['all_about'] = $this->w_model->select_all_about();
    $data['content'] = $this->load->view('admin/site/about', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_about() {
            $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/about');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['about_title']=$this->input->post('title',ture);
            $data['about']=$this->input->post('about',ture);
            $data['title1']=$this->input->post('title1',ture);
            $data['about1']=$this->input->post('about1',ture);
            $this->w_model->save_about_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/about');
        }
       
    }

    public function delete_about($about_id) {
        $data = array();
        $this->w_model->delete_about_info_by_about_id($about_id);
        $data = array();
        $data['message'] = "About delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/about');
    }

   public function edit_about($about_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_about'] = $this->w_model->select_all_about();
        $data['about_info'] = $this->sa_model->select_about_info_by_about_id($about_id);
        $data['content'] = $this->load->view('admin/site/edit_about', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_about() {
             $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $about_id = $this->input->post('about_id', true);
        $data['about']=$this->input->post('about',ture);
        $data['about_title']=$this->input->post('title',ture);   
        $data['title1']=$this->input->post('title1',ture);
        $data['about1']=$this->input->post('about1',ture);
        $this->sa_model->update_about_info($data, $about_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_about/' . $about_id);
        }

    
    
     
     public function contact() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
  
    $data['all_contact'] = $this->w_model->select_all_contact();
    $this->load_index();
    $data['content'] = $this->load->view('admin/site/contact', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_contact() {
            $data = array();
            $data['address'] =$this->input->post('address', true);
            $data['number'] =$this->input->post('number', true);
            $data['email'] =$this->input->post('email', true);
            $data['details'] =$this->input->post('details', true);
             $data['facebook'] =$this->input->post('facebook', true);
            $data['twitter'] =$this->input->post('twitter', true);
            $data['youtube'] =$this->input->post('youtube', true);
            $data['instagram'] =$this->input->post('instagram', true);
            $this->w_model->save_contact_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Contact Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/contact');
       
    }

    public function delete_contact($about_id) {
        $data = array();
        $this->w_model->delete_contact_info_by_contact_id($about_id);
        $data['message'] = "Contact delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/contact');
    }

   
   public function edit_contact($contact_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_contact'] = $this->w_model->select_all_contact();
        $data['contact_info'] = $this->sa_model->select_contact_info_by_contact_id($contact_id);
        $data['content'] = $this->load->view('admin/site/edit_contact', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_contact() {
             $data = array();
        $contact_id = $this->input->post('contact_id', true);
        $data['address']=$this->input->post('address',ture);
        $data['number']=$this->input->post('number',ture);
        $data['email']=$this->input->post('email',ture);
        $data['details']=$this->input->post('details',ture);
        $data['facebook'] =$this->input->post('facebook', true);
        $data['twitter'] =$this->input->post('twitter', true);
        $data['youtube'] =$this->input->post('youtube', true);
        $data['instagram'] =$this->input->post('instagram', true);
        $this->sa_model->update_contact_info($data, $contact_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_contact/' . $contact_id);
        }
    
     public function counter() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
  
    $data['all_counter'] = $this->w_model->select_all_counter();
    $this->load_index();
    $data['content'] = $this->load->view('admin/site/counter', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_counter() {
            $data = array();
            $data['project'] =$this->input->post('project', true);
            $data['client'] =$this->input->post('client', true);
            $data['member'] =$this->input->post('member', true);
            $data['award'] =$this->input->post('award', true);
            $this->w_model->save_counter_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Contact Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/counter');
       
    }

    public function delete_counter($counter_id) {
        $data = array();
        $this->w_model->delete_counter_info_by_countert_id($counter_id);
        $data['message'] = "Counter delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/contact');
    }

   
   public function edit_counter($counter_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_counter'] = $this->w_model->select_all_counter();
        $data['counter_info'] = $this->sa_model->select_counter_info_by_counter_id($counter_id);
        $data['content'] = $this->load->view('admin/site/edit_counter', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_counter() {
             $data = array();
        $counter_id = $this->input->post('counter_id', true);
        $data['project']=$this->input->post('project',ture);
        $data['client']=$this->input->post('client',ture);
        $data['member']=$this->input->post('member',ture);
        $data['award']=$this->input->post('award',ture);
        $this->sa_model->update_counter_info($data, $counter_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_counter/' . $counter_id);
        }
    
      
     public function testimonial() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
  
    $data['all_testimonial'] = $this->w_model->select_all_testimonial();
    $this->load_index();
    $data['content'] = $this->load->view('admin/site/testimonial', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_testimonial() {
            $data = array();
            $data['name'] =$this->input->post('name', true);
            $data['designation'] =$this->input->post('designation', true);
            $data['details'] =$this->input->post('details', true);
            $this->w_model->save_testimonial_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Testimonial Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/testimonial');
       
    }

    public function delete_testimonial($testimonial_id) {
        $data = array();
        $this->w_model->delete_testimonial_info_by_testimonial_id($testimonial_id);
        $data['message'] = "Testimonial delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/testimonial');
    }

   
   public function edit_testimonial($testimonial_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_testimonial'] = $this->w_model->select_all_testimonial();
        $data['testimonial_info'] = $this->sa_model->select_testimonial_info_by_testimonial_id($testimonial_id);
        $data['content'] = $this->load->view('admin/site/edit_testimonial', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_testimonial() {
             $data = array();
        $testimonial_id = $this->input->post('testimonial_id', true);
        $data['name']=$this->input->post('name',ture);
        $data['designation']=$this->input->post('designation',ture);
        $data['details']=$this->input->post('details',ture);
        $this->sa_model->update_testimonial_info($data, $testimonial_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_testimonial/' . $testimonial_id);
        }
    
      public function user_contact() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_user_contact'] = $this->w_model->select_all_user_contact();
    $this->load_index();
    $data['content'] = $this->load->view('admin/site/user_contact', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    
        public function save_user_contact() {
            $data = array();
            $data['name'] =$this->input->post('name', true);
            $data['email'] =$this->input->post('email', true);
            $data['message'] =$this->input->post('message', true);
             $data['date'] =date('d-m-Y');
            $this->w_model->save_user_contact_info($data);
            $sdata = array();
            $sdata['message'] = "Message sent Successful";
            $this->session->set_userdata($sdata);
            redirect('welcome/contact');
       
    }

    public function delete_user_contact($user_contact_id) {
        $data = array();
        $this->w_model->delete_user_contact_info_by_user_contact_id($user_contact_id);
        $data['message'] = "Contact delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/user_contact');
    }

     public function add_banking() {
    $data = array();
    $user_id= $this->user();
    $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_email'] = $this->sa_model->select_email();
    $data['all_banking'] = $this->w_model->select_all_banking();
    $data['all_deposit_pending'] = $this->sa_model->select_pending_deposit_history();
    $data['all_withdraw_pending'] = $this->sa_model->select_pending_withdraw_history();
    $this->load_index();
    $data['content'] = $this->load->view('admin/site/add_banking', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_banking() {
            $data = array();
            $data['number'] =$this->input->post('number', true);
            $data['banking_name'] =$this->input->post('banking_name', true);
            $data['type'] =$this->input->post('type', true);
            $this->w_model->save_banking_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Banking Info Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_banking');
       
    }

    public function delete_banking($banking_id) {
        $data = array();
        $this->w_model->delete_banking_info_by_banking_id($banking_id);
        $data['message'] = " delete Banking info Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/add_banking');
    }
    
    public function member() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $this->load_index();
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_artists'] = $this->sa_model->select_all_artists();
    $data['content'] = $this->load->view('admin/site/artists', $data, true);
    $this->load->view('admin/index', $data);
    
    }


   public function save_artists() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/member');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['name']=$this->input->post('name',ture);
            $data['category']=$this->input->post('category',ture);
             $data['facebook']=$this->input->post('facebook',ture);
            $data['twitter']=$this->input->post('twitter',ture);
            $data['linkin']=$this->input->post('linkin',ture);
            $data['gmail']=$this->input->post('gmail',ture);
            $this->sa_model->save_artists_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/member');
        }
    }
    public function delete_artists($artists_id) {
        $this->sa_model->delete_artists_info_by_artists_id($artists_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/member');
    
    }

  

   public function edit_artists($artists_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_artists'] = $this->sa_model->select_all_artists();
        $data['artists_info'] = $this->sa_model->select_artists_info_by_artists_id($artists_id);
        $data['content'] = $this->load->view('admin/site/edit_artists', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_artists() {
             $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
         $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $artists_id = $this->input->post('artists_id', true);
        $data['name']=$this->input->post('name',ture);
        $data['category']=$this->input->post('category',ture);
             $data['facebook']=$this->input->post('facebook',ture);
            $data['twitter']=$this->input->post('twitter',ture);
            $data['linkin']=$this->input->post('linkin',ture);
            $data['gmail']=$this->input->post('gmail',ture);
        $this->sa_model->update_artists_info($data, $artists_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_artists/' . $artists_id);
        }

 public function gallery() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $this->load_index();
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_gallery'] = $this->sa_model->select_all_gallery();
    $data['content'] = $this->load->view('admin/site/gallery', $data, true);
    $this->load->view('admin/index', $data);
    
    }


   public function save_gallery() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '400240';
        $config['max_height'] = '96800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/gallery');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title']=$this->input->post('title',ture);
            $this->sa_model->save_gallery_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/gallery');
        }
    }
    public function delete_gallery($gallery_id) {
        $this->sa_model->delete_gallery_info_by_gallery_id($gallery_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/gallery');
    
    }

     public function edit_gallery($gallery_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_gallery'] = $this->sa_model->select_all_gallery();
        $data['gallery_info'] = $this->sa_model->select_gallery_info_by_gallery_id($gallery_id);
        $data['content'] = $this->load->view('admin/site/edit_gallery', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_gallery() {
             $data = array();
             $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $gallery_id = $this->input->post('gallery_id', true);
        $data['title']=$this->input->post('title',ture);
      
        $this->sa_model->update_gallery_info($data, $gallery_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_gallery/' . $gallery_id);
        }
    
    
     public function blog() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
    $this->load_index();
    $data['all_blog'] = $this->w_model->select_all_blog();
    $data['content'] = $this->load->view('admin/site/blog', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_blog() {
        $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/blog');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title']=$this->input->post('title',ture);
             $data['details']=$this->input->post('details',ture);
              $data['athor']='Admin';
             $data['date']=date('d-m-Y');
            $this->w_model->save_blog_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/blog');
        }
    }

    public function delete_blog($blog_id) {
        $this->w_model->delete_blog_info_by_blog_id($blog_id);
        $data = array();
        $data['message'] = "blog delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/blog');
    }

      public function edit_blog($blog_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_blog'] = $this->w_model->select_all_blog();
        $data['blog_info'] = $this->sa_model->select_blog_info_by_blog_id($blog_id);
        $data['content'] = $this->load->view('admin/site/edit_blog', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_blog() {
             $data = array();
             $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
                      $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $blog_id = $this->input->post('blog_id', true);
        $data['title']=$this->input->post('title',ture);
        $data['details']=$this->input->post('details',ture);
        $data['athor']=$this->input->post('athor',ture);
        $data['date']=$this->input->post('date',ture);
        $this->sa_model->update_blog_info($data, $blog_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_blog/' . $blog_id);
        }
    
    public function slider() {
    $data = array();
    $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $data['all_logo'] = $this->w_model->select_all_logo();
    $this->load_index();
    $data['all_slider'] = $this->w_model->select_all_slider();
    $data['content'] = $this->load->view('admin/site/slider', $data, true);
    $this->load->view('admin/index', $data);
    
    }

    public function save_slider() {
        $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/slider');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title']=$this->input->post('title',ture);
             $data['details']=$this->input->post('details',ture);
             $data['details1']=$this->input->post('details1',ture);
            $this->w_model->save_slider_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/slider');
        }
    }

    public function delete_slider($slider_id) {
        $this->w_model->delete_slider_info_by_slider_id($slider_id);
        $data = array();
        $data['message'] = "slider delete Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/slider');
    }
     public function edit_slider($slider_id) {
        $data = array();
        $user_id = $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['title'] = 'Edit Welcome Message Dtails';
        $data['all_slider'] = $this->w_model->select_all_slider();
        $data['slider_info'] = $this->sa_model->select_slider_info_by_slider_id($slider_id);
        $data['content'] = $this->load->view('admin/site/edit_slider', $data, true);
        $this->load->view('admin/index', $data);
    }

    public function update_slider() {
             $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
           $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $slider_id = $this->input->post('slider_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['details'] = $this->input->post('details', true);
        $data['details1'] = $this->input->post('details1', true);
        $this->sa_model->update_slider_info($data, $slider_id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_slider/' . $slider_id);
        }
       public function add_admin_user() {
        $data = array();
        $user_id= $this->user();
     $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
    $this->load_index();
    $data['all_logo'] = $this->w_model->select_all_logo();
    $data['all_gallery'] = $this->sa_model->select_all_gallery();
    $data['content'] = $this->load->view('admin/site/add_admin_user', $data, true);
    $this->load->view('admin/index', $data);
    }
         public function save_user(){
        $data = array();
        $config['upload_path'] = 'assets/user/images/small/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';  
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/add_admin_user');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['username'] = $this->input->post('username', true);
            $data['fullname'] = $this->input->post('fullname', true);
            $data['dob'] = $this->input->post('dob', true);
            $data['gender'] = $this->input->post('gender', true);
            $data['phone'] = $this->input->post('phone', true);
            $data['email'] = $this->input->post('email', true);
            $data['password'] = $this->input->post('password', true);
            $admin_id = $this->w_model->save_admin_user_info($data);
            $sdata = array();
            $sdata['email'] = $this->input->post('username', true);
            $sdata['password'] = $this->input->post('password', true);
            $sdata['status'] = 'admin';
            $sdata['user_status'] = 'active';
            $sdata['user_id'] = $admin_id;
            $this->a_model->save_admin_info($sdata);
            $sdata = array();
             $sdata['all_admin_user'] = $this->w_model->select_all_admin_user();
             $sdata['all_logo'] = $this->w_model->select_all_logo();
            $sdata['message'] = "Admin Registration Successful";
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_admin_user');
        }
    }
     public function all_admin_user() {
        $data = array();
        $data['test'] = "test text";
        $user_id= $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_admin_user'] = $this->w_model->select_all_admin_user();
       $data['content'] = $this->load->view('admin/site/all_admin_user', $data, true);
        $this->load->view('admin/index', $data);
    }
    public function delete_admin_user($admin_user_id){
        $data = array();
         $user_id= $this->user();
        $data['all_admin_users'] = $this->w_model->select_all_admin_users($user_id);
        $data['all_admin_user'] = $this->w_model->select_all_admin_user();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $this->w_model->delete_admin_user($admin_user_id);
        $data['message'] = 'Admin User Deleted !';
        $this->session->set_userdata($data);
          redirect('super_admin/all_admin_user');
    }
   
    
}
?>