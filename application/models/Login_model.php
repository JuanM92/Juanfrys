<?php

class Login_model extends CI_Model
{

    public function login($user,$pass)
    {
        $this->db->select('user','password');
        $this->db->from('usuarios');
        $this->db->where('user',$user);
        $this->db->where('password',$pass);
        $query =$this->db->get();

        if($query->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }
}
