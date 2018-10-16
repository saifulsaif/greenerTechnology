<?php

class Super_admin_model extends CI_Model {

   
   
        public function select_admin_account() {
         $this->db->select('*');
        $this->db->from('admin_account');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        }
        
         public function select_all_admin($admin_user_id) {
         $this->db->select('*');
        $this->db->from('user');
         $this->db->where('admin_id',$admin_user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        }
    public function select_all_block_user() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_info','user_info.user_id=user.user_id');
        $this->db->where('user_status','deactive');
        $this->db->order_by("admin_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function make_user_block($admin_id) {
    $user_status='deactive';
    $this->db->set('user_status',$user_status);
    $this->db->where('admin_id', $admin_id);
    $this->db->update('user');
    }
    public function make_user_unblock($admin_id) {
    $user_status='active';
    $this->db->set('user_status',$user_status);
    $this->db->where('admin_id', $admin_id);
    $this->db->update('user');
    }
   public function save_main_portfolio_info($data) {
        $this->db->insert('portfolio', $data);
    }

    public function display_main_portfolio_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_main_portfolio_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('portfolio');
    }
    
   

    public function select_all_main_portfolio() {
        $this->db->select('*');
        $this->db->from('portfolio');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_main_portfolio_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_main_portfolio_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('portfolio', $data);
    }
    
    
    
   

    public function delete_artists_info_by_artists_id($artists_id){
        $this->db->where('artists_id', $artists_id);
        $this->db->delete('artists');
    }
    
   

    public function select_all_artists() {
        $this->db->select('*');
        $this->db->from('artists');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_view_artists($artists_id) {
        $this->db->select('*');
        $this->db->from('artists');
        $this->db->where('artists_id',$artists_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

  
    
     
     public function save_artists_info($data) {
        $this->db->insert('artists', $data);
    }

    public function display_artists_details_by_artists_id($artists_id) {
        $this->db->select('*');
        $this->db->from('artists');
        $this->db->where('artists_id', $artists_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    
    
  public function save_gallery_info($data) {
        $this->db->insert('gallery', $data);
    }

    public function display_gallery_details_by_gallery_id($gallery_id) {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('gallery_id', $gallery_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function delete_gallery_info_by_gallery_id($gallery_id){
        $this->db->where('gallery_id', $gallery_id);
        $this->db->delete('gallery');
    }
    
   

    public function select_all_gallery() {
        $this->db->select('*');
        $this->db->from('gallery');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_gallery_info_by_gallery_id($gallery_id) {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('gallery_id', $gallery_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_gallery_info($data, $gallery_id) {
        $this->db->where('gallery_id', $gallery_id);
        $this->db->update('gallery', $data);
    }
    
       public function select_slider_info_by_slider_id($slider_id) {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('slider_id', $slider_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_slider_info($data, $slider_id) {
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slider', $data);
    }
       public function select_logo_info_by_logo_id($logo_id) {
        $this->db->select('*');
        $this->db->from('logo');
        $this->db->where('logo_id', $logo_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_logo_info($data, $logo_id) {
        $this->db->where('logo_id', $logo_id);
        $this->db->update('logo', $data);
    }
    
       public function select_partner_info_by_partner_id($partner_id) {
        $this->db->select('*');
        $this->db->from('partner');
        $this->db->where('partner_id', $partner_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_partner_info($data, $partner_id) {
        $this->db->where('partner_id', $partner_id);
        $this->db->update('partner', $data);
    }
    
    
    
       public function select_about_info_by_about_id($about_id) {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('about_id', $about_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_about_info($data, $about_id){
        $this->db->where('about_id', $about_id);
        $this->db->update('about', $data);
    }
  
   public function select_artists_info_by_artists_id($artists_id) {
        $this->db->select('*');
        $this->db->from('artists');
        $this->db->where('artists_id', $artists_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_artists_info($data, $artists_id) {
        $this->db->where('artists_id', $artists_id);
        $this->db->update('artists', $data);
    }
     public function select_contact_info_by_contact_id($contact_id) {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('contact_id', $contact_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_contact_info($data, $contact_id) {
        $this->db->where('contact_id', $contact_id);
        $this->db->update('contact', $data);
    }
    public function select_counter_info_by_counter_id($counter_id) {
        $this->db->select('*');
        $this->db->from('counter');
        $this->db->where('counter_id', $counter_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_counter_info($data, $counter_id) {
        $this->db->where('counter_id', $counter_id);
        $this->db->update('counter', $data);
    }
    
    
       public function select_testimonial_info_by_testimonial_id($testimonial_id) {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->where('testimonial_id', $testimonial_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    public function update_testimonial_info($data, $testimonial_id) {
        $this->db->where('testimonial_id', $testimonial_id);
        $this->db->update('testimonial', $data);
    }
     public function select_main_portfolio_info_by_main_portfolio_id($id) {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_portfolio_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('portfolio', $data);
    }
       public function select_blog_info_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
    }
    
    public function update_blog_info($data, $blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('blog', $data);
    }
     
    
   
}

?>