<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    static $admin_id = '0';

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'a_model', true);
        $this->load->model('welcome_model', 'w_model', true);
        $this->load->model('user_model', 'u_model', true);
        $this->load->model('admin_login_model', 'al_model', true);
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            $sdata = array();
            $sdata['exception'] = "Plase Enter UserName & Password! ";
            $this->session->set_userdata($sdata);
            redirect('admin_login', 'refresh', $sdata);
        }
        $this->load->model("user_model");
        $this->load->helper("url");
        $this->load->helper('form');
        ;
    }

    public function index() {
        $data = array();
        $data['test'] = "test text";
        $data['all_logo'] = $this->w_model->select_all_logo();
        $user_id = $this->session->userdata('user_id');
        $data['all_referral'] = $this->u_model->select_referral_id($user_id);
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_commission'] = $this->u_model->select_user_commission($user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_level'] = $this->a_model->select_user_current_level($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['total_deposit'] = $this->u_model->select_total_deposit($user_id);
        $data['total_withdraw'] = $this->u_model->select_total_withdraw($user_id);
        $data['user_id'] = $user_id;
        $data['maincontentpublic'] = $this->load->view('user/maincontentpublic', $data, true);
        $this->load->view('user/index', $data);  
        
        
    }

    public function profile() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/profile', $data, true);
        $this->load->view('user/index', $data);
    }

    public function matrix() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_referral'] = $this->u_model->select_referral_id($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['total_deposit'] = $this->u_model->select_total_deposit($user_id);
        $data['total_withdraw'] = $this->u_model->select_total_withdraw($user_id);
        $data['user_id'] = $user_id;
        $data['maincontentpublic'] = $this->load->view('user/matrix', $data, true);
        $this->load->view('user/index', $data);
    }

    public function promotion() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_level'] = $this->a_model->select_user_current_level($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['maincontentpublic'] = $this->load->view('user/promotion', $data, true);
        $this->load->view('user/index', $data);
    }

    public function get_promotion() {
        $sdata = array();
        $promotion_cost = 0;
        $current_balance = 0;
        $user_id = $this->session->userdata('user_id');
        $sdata['balance'] = $this->a_model->select_user_balance($user_id);
        $sdata['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        foreach ($sdata['balance'] as $balance) {
            $current_balance = $balance->balance;
        }
        foreach ($sdata['all_promotion'] as $pro) {
            $promotion_cost = ($pro->star * 100) + 100;
        }
        if ($current_balance > $promotion_cost) {
            $data = array();
            $promotion_stars = '1';
            $promotion_star = $this->input->post('promotion_star', true);
            if ($promotion_star == 0) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '100';
                $balance = '100';
                $data['date'] = date('d-m-Y');
               $this->a_model->save_promotion_history($data);
               $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id='0';
                foreach ($data['all_details'] as $user) {
                $reffer_id = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=1){
                $amount='50';
                $this->u_model->update_balance($reffer_id,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 1) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '200';
                $balance = '200';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
               $this->a_model->update_balance($user_id, $balance);
                $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id2);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=2){
                $amount='100';
                $this->u_model->update_balance($reffer_id2,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id2;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 2) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '300';
                $balance = '300';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                 $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
               $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id3);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=3){
                $amount='150';
                $this->u_model->update_balance($reffer_id3,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id3;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 3) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '400';
                $balance = '400';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
               $this->a_model->update_balance($user_id, $balance);
                 $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id4);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                
                if($reffer_star>=4){
                $amount='200';
                $this->u_model->update_balance($reffer_id4,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id4;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 4) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '500';
                $balance = '500';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                  $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id5);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=5){
                $amount='250';
                $this->u_model->update_balance($reffer_id5,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id5;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 5) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '600';
                $balance = '600';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                  $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id5);
                $reffer_id6='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id6 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id6);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=6){
                $amount='300';
                $this->u_model->update_balance($reffer_id6,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id6;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 6) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '700';
                $balance = '700';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                    $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id5);
                $reffer_id6='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id6 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id6);
                $reffer_id7='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id7 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id7);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=7){
                $amount='350';
                $this->u_model->update_balance($reffer_id7,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id7;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 7) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '800';
                $balance = '800';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                   $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id5);
                $reffer_id6='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id6 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id6);
                $reffer_id7='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id7 = $user->referid;
                    
                }
                  $data['all_details'] = $this->a_model->select_user_details($reffer_id7);
                $reffer_id8='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id8 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id8);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=8){
                $amount='400';
                $this->u_model->update_balance($reffer_id8,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id8;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 8) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '900';
                $balance = '900';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                 $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id5);
                $reffer_id6='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id6 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id6);
                $reffer_id7='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id7 = $user->referid;
                    
                }
                  $data['all_details'] = $this->a_model->select_user_details($reffer_id7);
                $reffer_id8='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id8 = $user->referid;
                    
                }
                  $data['all_details'] = $this->a_model->select_user_details($reffer_id7);
                $reffer_id8='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id8 = $user->referid;
                    
                }
                   $data['all_details'] = $this->a_model->select_user_details($reffer_id8);
                $reffer_id9='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id9 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id9);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star>=9){
                $amount='450';
                $this->u_model->update_balance($reffer_id9,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id9;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } elseif ($promotion_star == 9) {
                $data['user_id'] = $user_id;
                $data['star'] = $promotion_star + 1;
                $data['promotion_fee'] = '1000';
                $balance = '1000';
                $data['date'] = date('d-m-Y');
                $this->a_model->save_promotion_history($data);
                $this->a_model->update_promotion_star($user_id, $promotion_stars);
                $this->a_model->update_balance($user_id, $balance);
                 $data['all_details'] = $this->a_model->select_user_details($user_id);
                $reffer_id1='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id1 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id1);
                $reffer_id2='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id2 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id2);
                $reffer_id3='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id3 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id3);
                $reffer_id4='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id4 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id4);
                $reffer_id5='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id5 = $user->referid;
                    
                }
                $data['all_details'] = $this->a_model->select_user_details($reffer_id5);
                $reffer_id6='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id6 = $user->referid;
                    
                }
                 $data['all_details'] = $this->a_model->select_user_details($reffer_id6);
                $reffer_id7='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id7 = $user->referid;
                    
                }
                  $data['all_details'] = $this->a_model->select_user_details($reffer_id7);
                $reffer_id8='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id8 = $user->referid;
                    
                }
                  $data['all_details'] = $this->a_model->select_user_details($reffer_id7);
                $reffer_id8='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id8 = $user->referid;
                    
                }
                   $data['all_details'] = $this->a_model->select_user_details($reffer_id8);
                $reffer_id9='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id9 = $user->referid;
                    
                }
                    $data['all_details'] = $this->a_model->select_user_details($reffer_id9);
                $reffer_id10='0';
                foreach ($data['all_details'] as $user) {
                    $reffer_id10 = $user->referid;
                    
                }
                 $reffer_star='0';
                $data['all_promotion'] = $this->a_model->select_user_promotion($reffer_id10);
                foreach ($data['all_promotion'] as $star) {
                $reffer_star = $star->star;
                    
                }
                if($reffer_star==10){
                $amount='500';
                $this->u_model->update_balance($reffer_id10,$amount);
                $ssdata = array();
                $ssdata['user_id'] = $reffer_id10;
                $ssdata['amount'] = $amount;
                $sdata['level'] = $user_id;
                $ssdata['date'] = date('d-m-Y');
                $this->u_model->save_commission_info($ssdata);
                $this->a_model->update_admin_balance($amount);
                }
                else{
                     $this->a_model->update_admin_balance($balance);
                }
            } else {
                
            }

            $data['message'] = 'Your Successfully Promoted !';
            $this->session->set_userdata($data);
            redirect('user/promotion');
        } else {
            $data['message'] = 'Sorry ! Depost your account';
            $this->session->set_userdata($data);
            redirect('user/promotion');
        }
    }

    public function promotion_history() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_promotion_history'] = $this->a_model->select_promotion_history($user_id);
        $data['maincontentpublic'] = $this->load->view('user/promotion_history', $data, true);
        $this->load->view('user/index', $data);
    }

    public function add_deposit() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_banking'] = $this->w_model->select_all_banking();
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/add_deposit', $data, true);
        $this->load->view('user/index', $data);
    }

    public function save_deposit() {
        $sdata = array();
        $sdata['user_id'] = $this->input->post('user_id', true);
        $sdata['amount'] = $this->input->post('amount', true);
        $sdata['method'] = $this->input->post('method', true);
        $sdata['renumber'] = $this->input->post('renumber', true);
        $sdata['tax_id'] = $this->input->post('tax_id', true);
        $sdata['status'] = '1';
        $sdata['date'] = date('d-m-Y');
        $this->u_model->save_deposit_info($sdata);
        $edata['message'] = 'Depost Request Send Successful !';
        $this->session->set_userdata($edata);
        redirect('user/add_deposit');
    }

    public function deposit_history() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_deposit'] = $this->u_model->select_deposit_history($user_id);
        $data['maincontentpublic'] = $this->load->view('user/deposit_history', $data, true);
        $this->load->view('user/index', $data);
    }

    public function add_withdraw() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/add_withdraw', $data, true);
        $this->load->view('user/index', $data);
    }

    public function check_withdraw() {
        $sdata = array();
        $current_balance = $this->input->post('current_balance', true);
        $balance = round($current_balance, 2);
        $withdraw_amount = $this->input->post('withdraw_amount', true);

        if ($balance < $withdraw_amount) {
            $sdata['exception'] = 'Sorry your balance is too low !';
            $this->session->set_userdata($sdata);
            redirect('user/add_withdraw');
        } else {
            $method = $this->input->post('method', true);
            $send_number = $this->input->post('send_number', true);
            redirect('user/verify/' . $withdraw_amount . '/' . $method . '/' . $send_number);
        }
    }

    public function verify($withdraw_amount, $method, $send_number) {
        $data = array();
        
        $data['withdraw_amount'] = $withdraw_amount;
        $data['method'] = $method;
        $data['send_number'] = $send_number;
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
         $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/verify', $data, true);
        $this->load->view('user/index', $data);
    }

    public function save_withdraw() {
        $email_address = $this->input->post('user_name', true);
        $password = $this->input->post('password', true);
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_user($email_address, $password);
        // echo '<pre>';
        // print_r($result);
        if ($result) {
            $sdata = array();
            $user_id = $this->session->userdata('user_id');

            $sdata['user_id'] = $result->user_id;
            if ($sdata['user_id'] == $user_id) {
                $sdata['user_id'] = $user_id;
                $sdata['status'] = '1';
                $sdata['date'] = date('d-m-Y');
                $sdata['withdraw_amount'] = $this->input->post('withdraw_amount', true);
                $sdata['method'] = $this->input->post('method', true);
                $sdata['send_number'] = $this->input->post('send_number', true);
                $this->u_model->save_withdraw_info($sdata);
                $sdata['message'] = 'Withdraw Request send Successful !';
                $this->session->set_userdata($sdata);
                redirect('user/add_withdraw', $sdata);
            }
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/add_withdraw', $data);
        } else {
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/add_withdraw', $data);
        }
    }

    public function withdraw_history() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_withdraw'] = $this->u_model->select_withdraw_history($user_id);
        $data['maincontentpublic'] = $this->load->view('user/withdraw_history', $data, true);
        $this->load->view('user/index', $data);
    }

    public function fund_transfer() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['maincontentpublic'] = $this->load->view('user/fund_transfer', $data, true);
        $this->load->view('user/index', $data);
    }

    public function check_transer() {
        $sdata = array();
        $current_balance = $this->input->post('current_balance', true);
        $balance = round($current_balance, 2);
        $transfer_amount = $this->input->post('transfer_amount', true);
         $refer_id = $this->input->post('transfer_id', true);
        $referral_user=$this->w_model->select_all_referral_user($refer_id); 
        
       $trans_id='0';
       foreach ($referral_user as $user){
          $trans_id=$user->user_id;
           }
           if($trans_id){
              if ($balance < $transfer_amount) {
            $sdata['exception'] = 'Sorry your balance is too low !';
            $this->session->set_userdata($sdata);
            redirect('user/fund_transfer');
        } else {
            $transfer_id = $refer_id;
            redirect('user/transfer_verify/' . $transfer_id . '/' . $transfer_amount);
        }
           }
           else{
              $sdata['exception'] = 'Transfer Id Invalid !';
            $this->session->set_userdata($sdata);
            redirect('user/fund_transfer');
           }
      
    }

    public function transfer_verify($transfer_id, $transfer_amount) {
        $data = array();
        $data['transfer_amount'] = $transfer_amount;
        $data['transfer_id'] = $transfer_id;
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/transfer_verify', $data, true);
        $this->load->view('user/index', $data);
    }

    public function save_transfer() {
        $email_address = $this->input->post('user_name', true);
        $password = $this->input->post('password', true);
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_user($email_address, $password);
        // echo '<pre>';
        // print_r($result);
        if ($result) {
            $sdata = array();
            $user_id = $this->session->userdata('user_id');

            $sdata['user_id'] = $result->user_id;
            if ($sdata['user_id'] == $user_id) {
                $sdata['user_id'] = $user_id;
                $sdata['date'] = date('d-m-Y');
                $sdata['transfer_amount'] = $this->input->post('transfer_amount', true);
                $transfer_amount = $this->input->post('transfer_amount', true);
                $transfer_id = $this->input->post('transfer_id', true);
                $sdata['transfer_to_id'] = $this->input->post('transfer_id', true);
                $this->u_model->save_transfer_info($sdata);
                $this->u_model->update_transfer_to_balance($transfer_id, $transfer_amount);
                $this->u_model->update_transfer_from_balance($user_id, $transfer_amount);
                $sdata['message'] = 'Fund Transfer Successful !';
                $this->session->set_userdata($sdata);
                redirect('user/fund_transfer', $sdata);
            }
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/fund_transfer', $data);
        } else {
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/add_withdraw', $data);
        }
    }

    public function transaction_log() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_transaction'] = $this->u_model->select_transaction($user_id);
        $data['maincontentpublic'] = $this->load->view('user/transaction_log', $data, true);
        $this->load->view('user/index', $data);
    }

    public function create_email() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/create_email', $data, true);
        $this->load->view('user/index', $data);
    }

    public function save_email() {
        $sdata = array();
        $sdata['to'] = $this->input->post('to', true);
        $user_id = $this->session->userdata('user_id');
        $sdata['from'] = $user_id;
        $sdata['subject'] = $this->input->post('subject', true);
        $sdata['message'] = $this->input->post('message', true);
        $sdata['date'] = date('d-m-Y');
        $sdata['status'] = '1';
        $this->u_model->save_email_info($sdata);
        $this->u_model->save_sent_email_info($sdata);
        $sdata['message'] = 'Send Successfully !';
        $this->session->set_userdata($sdata);
        redirect('user/create_email');
    }

    public function view_email($email_id) {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_single_email'] = $this->u_model->select_single_email($email_id, $user_id);
        $this->u_model->update_email($email_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['maincontentpublic'] = $this->load->view('user/view_inbox', $data, true);
        $this->load->view('user/index', $data);
    }

    public function delete_email($email_id) {
        $data = array();
        $user_id = $this->session->userdata('user_id');
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $this->u_model->delete_email($email_id);
        $data['message'] = 'Deleted!';
        $this->session->set_userdata($data);
        $data['maincontentpublic'] = $this->load->view('user/inbox', $data, true);
        $this->load->view('user/index', $data);
    }

    public function inbox() {
        $data = array();
        $data['test'] = "test text";
        $data['all_logo'] = $this->w_model->select_all_logo();
        $user_id = $this->session->userdata('user_id');
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['maincontentpublic'] = $this->load->view('user/inbox', $data, true);
        $this->load->view('user/index', $data);
    }

    public function sent() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_sent_email'] = $this->u_model->select_sent_email($user_id);
        $data['maincontentpublic'] = $this->load->view('user/sent_email', $data, true);
        $this->load->view('user/index', $data);
    }

    public function view_sent_email($sent_email_id) {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_single_email'] = $this->u_model->select_single_sent_email($sent_email_id, $user_id);
        $data['maincontentpublic'] = $this->load->view('user/view_email', $data, true);
        $this->load->view('user/index', $data);
    }

    public function delete_sent_email($sent_email_id) {
        $data = array();
        $user_id = $this->session->userdata('user_id');
        $data['all_sent_email'] = $this->u_model->select_sent_email($user_id);
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $this->u_model->delete_sent_email($sent_email_id);
        $data['message'] = 'Deleted!';
        $this->session->set_userdata($data);
        $data['maincontentpublic'] = $this->load->view('user/sent_email', $data, true);
        $this->load->view('user/index', $data, 'refresh');
    }

    public function user_registration() {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['user_id'] = $user_id;
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['maincontentpublic'] = $this->load->view('user/user_registration', $data, true);
        $this->load->view('user/index', $data);
    }

    public function save_user() {

        $data = array();
        $refer_id = $this->input->post('referid', true);
        $referral_user = $this->w_model->select_all_referral_user($refer_id);

        $count = '0';
        foreach ($referral_user as $user) {
            $count = $count + 1;
        }
        if ($count <= 4) {
            if ($count == 4) {
                $ddata = array();
                $ddata['level'] = '1';
                $ddata['user_id'] = $refer_id;
               // $this->a_model->save_level_info($ddata);
                $ddata['all_promotion'] = $this->a_model->select_user_promotion($refer_id);
                foreach ($ddata['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star > 0) {
                        
                    }
                }
            }
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
                $edata['message'] = $error;
                $this->session->set_userdata($edata);
                redirect('user/user_registration');
            } else {
                $fdata = $this->upload->data();
                $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
                $data['referid'] = $this->input->post('referid', true);
                $data['username'] = $this->input->post('username', true);
                $data['fullname'] = $this->input->post('fullname', true);
                $data['dob'] = $this->input->post('dob', true);
                $data['gender'] = $this->input->post('gender', true);
                $data['phone'] = $this->input->post('phone', true);
                $data['address'] = $this->input->post('address', true);
                 $data['type'] = $this->input->post('type', true);
                $data['email'] = $this->input->post('email', true);
                $data['password'] = $this->input->post('password', true);
                $refer_id = $this->input->post('referid', true);
                $result = $this->w_model->select_all_user($refer_id);
                if ($result) {
                    $user_id = $this->a_model->save_user_info($data);
                    $sdata = array();
                    $sdata['email'] = $this->input->post('username', true);
                    $sdata['password'] = $this->input->post('password', true);
                    $sdata['status'] = 'user';
                    $sdata['user_status'] = 'active';
                    $sdata['user_id'] = $user_id;
                    $this->a_model->save_admin_info($sdata);
                    $fdata = array();
                    $fdata['star'] = '0';
                    $fdata['user_id'] = $user_id;
                    $this->a_model->save_promotion_info($fdata);
                    $edata = array();
                    $edata['balance'] = '0';
                    $edata['user_id'] = $user_id;
                    $this->a_model->save_balance_info($edata);
                    $data['message'] = 'Add User Successfully !';
                    $this->session->set_userdata($data);
                    redirect('user/matrix');
                } else {
                    $edata = array();
                    $edata['error'] = 'Refferral ID is Invalid !';
                    $this->session->set_userdata($edata);
                    redirect('user/user_registration');
                }
            }
        } else {
            $edata = array();
            $edata['error'] = 'Your Level already full up !';
            $this->session->set_userdata($edata);
            redirect('user/user_registration');
        }
    }

    public function user_profile($refer_user_id) {
        $data = array();
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_referral'] = $this->u_model->select_referral_id($refer_user_id);
        $data['all_refer_details'] = $this->a_model->select_user_details($refer_user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($refer_user_id);
        $data['balance'] = $this->a_model->select_user_balance($refer_user_id);
        $data['maincontentpublic'] = $this->load->view('user/user_profile', $data, true);
        $this->load->view('user/index', $data);
    }

    public function level() {
        $data = array();
        $user_id = $this->session->userdata('user_id');
        $data['level'] = $this->a_model->select_user_level($user_id);
        $level1[] = '0';
        foreach ($data['level'] as $level) {
            $level1[] = $level->level;
        }
        $arrlength = count($level1);
        $count1 = '0';
        $count2 = '0';
        $count3 = '0';
        $count4 = '0';
        $count5 = '0';
        $count6 = '0';
        $count7 = '0';
        $count8 = '0';
        $count9 = '0';
        $count10 = '0';
        for ($x = 1; $x < $arrlength; $x++) {
            if ($level1[$x] == 1) {
                $count1 = $count1 + 1;
            }
            if ($level1[$x] == 2) {
                $count2 = $count2 + 1;
            }
            if ($level1[$x] == 3) {
                $count3 = $count3 + 1;
            }
            if ($level1[$x] == 4) {
                $count4 = $count4 + 1;
            }
            if ($level1[$x] == 5) {
                $count5 = $count5 + 1;
            }
            if ($level1[$x] == 6) {
                $count6 = $count6 + 1;
            }
            if ($level1[$x] == 7) {
                $count7 = $count7 + 1;
            }
            if ($level1[$x] == 8) {
                $count8 = $count8 + 1;
            }
            if ($level1[$x] == 9) {
                $count9 = $count9 + 1;
            }
            if ($level1[$x] == 10) {
                $count10 = $count10 + 1;
            }
        }

        if ($count1 == 5) {
            $new_level = '2';
            $amount = '2500';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 2) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 2) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }


        if ($count2 == 5) {
            $new_level = '3';
            $amount = '18750';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 3) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 3) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }

        if ($count3 == 5) {
            $new_level = '4';
            $amount = '125000';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 4) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 4) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count4 == 5) {
            $new_level = '5';
            $amount = '781250';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 5) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 5) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count5 == 5) {
            $new_level = '6';
            $amount = '4687500';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 6) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 6) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count6 == 5) {
            $new_level = '7';
            $amount = '27303750';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 7) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 7) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count7 == 5) {
            $new_level = '8';
            $amount = '150625000';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 8) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 8) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count8 == 5) {
            $new_level = '9';
            $amount = '878006250';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 9) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 9) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
        if ($count9 == 5) {
            $new_level = '10';
            $amount = '4877812500';
            $current_level = '0';
            $data['all_level'] = $this->a_model->select_user_current_level($user_id);
            foreach ($data['all_level'] as $level) {
                $current_level = $level->level;
            }
            if ($current_level != 10) {
                $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
                foreach ($data['all_promotion'] as $user) {
                    $star = $user->star;
                    if ($star >= 10) {
                        $this->save_deposit_info($amount, $user_id, $new_level);
                    } else {
                        $this->promiton_page($user_id);
                    }
                }
            } else {
                $this->promiton_page($user_id);
            }
        }
    }

    public function save_deposit_info($amount, $user_id, $new_level) {

        $sdata = array();
        $sdata['user_id'] = $user_id;
        $sdata['amount'] = $amount;
        $sdata['level'] = $new_level;
        $sdata['date'] = date('d-m-Y');
        $this->u_model->save_commission_info($sdata);
        $this->u_model->update_user_account($amount, $user_id);
        $this->a_model->update_user_level($user_id, $new_level);
        $data['test'] = "test text";
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_level'] = $this->a_model->select_user_current_level($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['maincontentpublic'] = $this->load->view('user/promotion', $data, true);
        $this->load->view('user/index', $data);
    }

    public function promiton_page($user_id) {
        $data['test'] = "test text";
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_level'] = $this->a_model->select_user_current_level($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['maincontentpublic'] = $this->load->view('user/promotion', $data, true);
        $this->load->view('user/index', $data);
    }
     public function change_password() {
        $data['test'] = "test text";
        $user_id = $this->session->userdata('user_id');
        $data['all_logo'] = $this->w_model->select_all_logo();
        $data['all_email'] = $this->u_model->select_email($user_id);
        $data['all_details'] = $this->a_model->select_user_details($user_id);
        $data['all_promotion'] = $this->a_model->select_user_promotion($user_id);
        $data['all_level'] = $this->a_model->select_user_current_level($user_id);
        $data['balance'] = $this->a_model->select_user_balance($user_id);
        $data['maincontentpublic'] = $this->load->view('user/change_password', $data, true);
        $this->load->view('user/index', $data);
    }
    public function save_new_password(){
         $email_address = $this->input->post('user_name', true);
        $password = $this->input->post('old_password', true);
        $new_password = $this->input->post('new_password', true);
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_user($email_address, $password);
        // echo '<pre>';
        // print_r($result);
        if ($result) {
            $sdata = array();
            $user_id = $this->session->userdata('user_id');

            $sdata['user_id'] = $result->user_id;
            if ($sdata['user_id'] == $user_id) {
                $this->u_model->update_user_password($user_id,$new_password);
                $sdata['message'] = 'Password Changed !';
                $this->session->set_userdata($sdata);
                redirect('user/index', $sdata);
            }
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/change_password', $data);
        } else {
            $data = array();
            $data['exception'] = "User Name / Password Invalide ! ";
            $this->session->set_userdata($data);
            redirect('user/change_password', $data);
        }
    }

}
