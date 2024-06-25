<?php

class Madmin extends CI_Model{

    public function cek_login($u, $p) {
        $q = $this->db->get_where('user', array('name'=>$u, 'password'=>$p,'level'=>'admin','aktif'=>'Y',));
        return $q;
    }


}