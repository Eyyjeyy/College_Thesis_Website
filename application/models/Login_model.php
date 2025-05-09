<?php

class Login_model extends CI_Model{
    
    public function getUserDetails($u, $p){
        $this->db->where('username', $u);
        $this->db->where('password', $p);

        $q = $this->db->get('account');
        return($q->num_rows() > 0) ? $q->result() : FALSE;
    }
}