<?php


class Welcome_model extends CI_Model {
    //put your code here
     public function select_all_user($refer_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where('user_id',$refer_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_referral_user($refer_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where('referid',$refer_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
 public function update_admin_info($data, $email_address) {
        $this->db->where('email', $email_address);
        $this->db->update('user', $data);
    }
    
     function lookup($keyword){ 
        $this->db->select('*')->from('prodect'); 
        $this->db->like('product_name',$keyword,'after'); 
        $this->db->or_like('product_type',$keyword,'after'); 
        $query = $this->db->get();     
        return $query->result(); 
    }
    
     public function save_logo_info($sdata) {
        $this->db->insert('logo', $sdata);
      
    }
    public function select_all_logo(){
        $this->db->select('*');
        $this->db->from('logo');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_logo_info_by_logo_id($logo_id) {
        $this->db->where('logo_id', $logo_id);
        $this->db->delete('logo');
    }
      public function save_partner_info($sdata) {
        $this->db->insert('partner', $sdata);
      
    }
    public function select_all_partner(){
        $this->db->select('*');
        $this->db->from('partner');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_partner_info_by_partner_id($partner_id) {
        $this->db->where('partner_id', $partner_id);
        $this->db->delete('partner');
    }
   
       public function save_blog_info($sdata) {
        $this->db->insert('blog', $sdata);
      
    }
    public function select_all_blog(){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by("blog_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_single_blog($blog_id){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_blog_info_by_blog_id($blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('blog');
    }
     public function save_slider_info($sdata) {
        $this->db->insert('slider', $sdata);
      
    }
    public function select_all_slider(){
        $this->db->select('*');
        $this->db->from('slider');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     
      public function delete_slider_info_by_slider_id($slider_id) {
        $this->db->where('slider_id', $slider_id);
        $this->db->delete('slider');
    }
    
    
     public function save_about_info($sdata) {
        $this->db->insert('about', $sdata);
      
    }
      public function select_all_about(){
        $this->db->select('*');
        $this->db->from('about');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_about_info_by_about_id($about_id) {
        $this->db->where('about_id', $about_id);
        $this->db->delete('about');
    }
    
    
     public function save_contact_info($sdata) {
        $this->db->insert('contact', $sdata);
      
    }
      public function select_all_contact(){
        $this->db->select('*');
        $this->db->from('contact');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_contact_info_by_contact_id($contact_id) {
        $this->db->where('contact_id', $contact_id);
        $this->db->delete('contact');
    }
      public function save_counter_info($sdata) {
        $this->db->insert('counter', $sdata);
      
    }
      public function select_all_counter(){
        $this->db->select('*');
        $this->db->from('counter');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_counter_info_by_contact_id($counter_id) {
        $this->db->where('counter_id', $counter_id);
        $this->db->delete('counter');
    }
         public function save_testimonial_info($sdata) {
        $this->db->insert('testimonial', $sdata);
      
    }
      public function select_all_testimonial(){
        $this->db->select('*');
        $this->db->from('testimonial');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_testimonial_info_by_testimonial_id($testimonial_id) {
        $this->db->where('testimonial_id', $testimonial_id);
        $this->db->delete('testimonial');
    }
    
     public function save_user_contact_info($sdata) {
        $this->db->insert('user_contact', $sdata);
      
    }
      public function select_all_user_contact(){
        $this->db->select('*');
        $this->db->from('user_contact');
        $this->db->order_by("user_contact_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_user_contact_info_by_user_contact_id($user_contact_id) {
        $this->db->where('user_contact_id', $user_contact_id);
        $this->db->delete('user_contact');
    }
    
     public function save_admin_user_info($sdata) {
        $this->db->insert('admin_user', $sdata);
         return $this->db->insert_id();
      
    }
       public function select_all_admin_user() {
         $this->db->select('*');
        $this->db->from('admin_user');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_admin_users($admin_user_id) {
         $this->db->select('*');
        $this->db->from('admin_user');
         $this->db->where('admin_user_id', $admin_user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function delete_admin_user($admin_user_id) {
        $this->db->where('admin_user_id', $admin_user_id);
        $this->db->delete('admin_user');
    }
    
        public function save_banking_info($sdata) {
        $this->db->insert('banking', $sdata);
      
    }
      public function select_all_banking(){
        $this->db->select('*');
        $this->db->from('banking');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_banking_info_by_banking_id($banking_id) {
        $this->db->where('banking_id', $banking_id);
        $this->db->delete('banking');
    }
}


?>
