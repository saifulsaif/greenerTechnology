<?php

class Admin_Login_Model extends CI_Model {

    public function select_user($email_address, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email_address);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
      public function select_admin($email_address, $password,$status) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email_address);
        $this->db->where('password', $password);
        $this->db->where('status', $status);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}

?>