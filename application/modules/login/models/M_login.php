<?php

class M_login extends CI_Model{
    
    function auth_login($username,$password){

        $hashed = $this->get_password($username)->row()->pass;

        if (password_verify($password, $hashed)) {
            return 1;
        } else {
            return 0;
        }
    }

    private function get_password($username){

        $this->db->select('pass');
        $this->db->where('username',$username);
        $sql = $this->db->get('tb_user',1);
        return $sql;
    }

    function get_login_data($username){

        $this->db->select('level,status,id,username');
        $this->db->where('username',$username);
        $sql = $this->db->get('tb_user',1);
        return $sql->row_array();
    }
}
