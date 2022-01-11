<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function getUserLogin()
    {
        $user = $this->session->userdata('id_user');
        $query = "SELECT `tb_user`.*
                    FROM `tb_user`
                   WHERE `tb_user`.`id_user` = $user
                ";
        return $this->db->query($query)->row_array();
    }
}
