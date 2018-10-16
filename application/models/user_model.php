<?php


class User_model extends CI_Model {
    //put your code here
      public function save_deposit_info($sdata) {
        $this->db->insert('deposit', $sdata);
      
    }
     public function select_deposit_history($user_id) {
        $this->db->select('*');
        $this->db->from('deposit');
        $this->db->where('user_id',$user_id);
        $this->db->order_by("deposit_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_total_deposit($user_id) {
        $this->db->select('*');
        $this->db->from('deposit');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function update_balance($user_id, $balance) {
    $this->db->set('balance', 'balance+'.(float)$balance, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    } 
    public function update_user_balance($reffer_id,$amount) {
    $this->db->set('balance', 'balance-'.$amount, false);
    $this->db->where('user_id', $reffer_id);
    $this->db->update('account');
    } 
     
     public function update_withdraw_balance($user_id, $balance) {
    $this->db->set('balance', 'balance-'.(float)$balance, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    }
     public function update_withdraw_admin_balance($balance) {
    $this->db->set('balance', 'balance-'.(float)$balance, false);
    $this->db->update('admin_account');
    }
    public function save_withdraw_info($sdata) {
        $this->db->insert('withdraw', $sdata);
      
    }
      public function select_withdraw_history($user_id) {
        $this->db->select('*');
        $this->db->from('withdraw');
        $this->db->where('user_id',$user_id);
        $this->db->order_by("withdraw_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_total_withdraw($user_id) {
        $this->db->select('*');
        $this->db->from('withdraw');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function save_transfer_info($sdata) {
        $this->db->insert('transfer', $sdata);
      
    }
     public function update_transfer_to_balance($user_id, $balance) {
    $this->db->set('balance', 'balance+'.(float)$balance, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    }
     public function update_transfer_from_balance($user_id, $balance) {
    $this->db->set('balance', 'balance-'.(float)$balance, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    }
     public function update_deposit_admin_account($balance) {
    $this->db->set('balance', 'balance+'.(float)$balance, false);
    $this->db->update('admin_account');
    }
      public function select_transaction($user_id) {
        $this->db->select('*');
        $this->db->from('transfer');
        $this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function save_email_info($sdata) {
    $this->db->insert('email', $sdata);
      
    } 
    public function select_email($user_id) {
        $this->db->select('*');
        $this->db->from('email');
        $this->db->join('user_info','user_info.user_id=email.from');
        $this->db->where('to',$user_id);
        $this->db->order_by("email_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_single_email($email_id,$user_id) {
        $this->db->select('*');
        $this->db->from('email');
        $this->db->join('user_info','user_info.user_id=email.from');
        $this->db->where('to',$user_id);
        $this->db->where('email_id',$email_id);
        $this->db->order_by("email_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
  
    public function delete_email($email_id) {
        $this->db->where('email_id', $email_id);
        $this->db->delete('email');
    }
     public function update_email($email_id) {
    $this->db->set('status', 'status-'.'1', false);
    $this->db->where('email_id', $email_id);
    $this->db->update('email');
    }
     
    public function save_sent_email_info($sdata) {
    $this->db->insert('sent_email', $sdata);
      
    }
     public function select_sent_email($user_id) {
        $this->db->select('*');
        $this->db->from('sent_email');
        $this->db->join('user_info','user_info.user_id=sent_email.to');
        $this->db->where('from',$user_id);
        $this->db->order_by("sent_email_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
  public function select_single_sent_email($sent_email_id,$user_id) {
        $this->db->select('*');
        $this->db->from('sent_email');
        $this->db->join('user_info','user_info.user_id=sent_email.to');
        $this->db->where('from',$user_id);
        $this->db->where('sent_email_id',$sent_email_id);
        $this->db->order_by("sent_email_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    } 
     public function delete_sent_email($sent_email_id) {
        $this->db->where('sent_email_id', $sent_email_id);
        $this->db->delete('sent_email');
    }
     public function select_referral_id($user_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where('referid',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function save_commission_info($sdata) {
        $this->db->insert('commission', $sdata);
      
    }
     public function select_user_commission($user_id) {
        $this->db->select('*');
        $this->db->from('commission');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function update_user_account($amount,$user_id) {
    $this->db->set('balance', 'balance+'.$amount, false);
    $this->db->where('user_id', $user_id);
    $this->db->update('account');
    }
    public function update_user_password($user_id,$new_password){
    $this->db->set('password',$new_password);
    $this->db->where('user_id', $user_id);
    $this->db->update('user'); 
    }
     
}