<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function updatePassword($id, $data)
    {
        $this->db->update('user', $data, ['id_users' => $id]);
        return $this->db->affected_rows();
    }
}
