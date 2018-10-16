<?php

class admin_model extends CI_Model {

    //put your code herep



    public function save_user_info($data) {
        $this->db->insert('user_info', $data);
        return $this->db->insert_id();
    }
     public function save_request_user_info($data) {
        $this->db->insert('request_user', $data);
        return $this->db->insert_id();
    }
    public function save_admin_info($sdata) {
        $this->db->insert('user', $sdata);
      
    }
     public function save_level_info($sdata) {
        $this->db->insert('level', $sdata);
      
    }
     public function save_promotion_history($data) {
        $this->db->insert('promotion_history', $data);
      
    }
     public function save_promotion_info($data) {
        $this->db->insert('promotion', $data);
    }
    public function save_balance_info($sdata) {
        $this->db->insert('account', $sdata);
      
    }

    public function select_user_details($user_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_user_promotion($user_id) {
        $this->db->select('*');
        $this->db->from('promotion');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     
      public function select_promotion_history($user_id) {
        $this->db->select('*');
        $this->db->from('promotion_history');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
   public function select_user_level($user_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('level','level.user_id=user_info.user_id');
        $this->db->where('referid',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_user_current_level($user_id) {
        $this->db->select('*');
        $this->db->from('level');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
     public function update_promotion_star($user_id,$promotion_stars) {
     $this->db->set('star', 'star+'.$promotion_stars, false);
    $this->db->where('user_id',$user_id);
    $this->db->update('promotion');
    } 
      public function select_user_balance($user_id) {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function delete_request_user($request_user_id) {
        $this->db->where('request_user_id', $request_user_id);
        $this->db->delete('request_user');
    }
     public function update_balance($user_id, $balance) {
    $this->db->set('balance', 'balance-'.(float)$balance, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    } 
     public function update_admin_balance($balance) {
    $this->db->set('balance', 'balance+'.(float)$balance, false);
    $this->db->update('admin_account');
    } 
    public function update_user_level($user_id,$new_level){
        $this->db->set('level',$new_level, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('level'); 
    }

    






    public function delete_header_info_by_header_id($header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->delete('header');
    }

    public function select_header_info_by_header_id($header_id) {
        $this->db->select('*');
        $this->db->from('header');
        $this->db->where('header_id', $header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_header_info($data, $header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->update('header', $data);
    } 
    
 
    
}

?>
