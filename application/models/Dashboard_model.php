<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    public function anggotaM()
    {
        $this->db->select('user.*, positions.position_name');
        $this->db->from('user');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        $this->db->where('position_id', 2);
        return $this->db->get()->num_rows();
    }

    public function anggotaS()
    {
        $this->db->select('user.*, positions.position_name');
        $this->db->from('user');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        $this->db->where('position_id', 1);
        return $this->db->get()->num_rows();
    }

    public function menunggu_konfirmasi()
    {
        $this->db->select('*');
        $this->db->from('presents');
        $this->db->where('status', 0);
        return $this->db->get()->num_rows();
    }

    public function kehadiran_dikonfirmasi()
    {
        $format = "d";
        $this->db->select('presents.*, user.name');
        $this->db->from('presents');
        $this->db->join('user', 'user.email = presents.user_id');
        $this->db->like('presents.date', date($format));
        $this->db->where('status', 1);
        return $this->db->get()->num_rows();
    }
}
