<?php
class Admin_m extends CI_Model
{
    public function login($data)
    {
        $this->db->where('username',$data['username']);
        $this->db->where('password',md5($data['password']));
        $a=$this->db->get('admin');
        return $a->row();
    }
}

?>