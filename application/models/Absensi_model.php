<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_model extends CI_Model
{

    public function insertEntri($data)
    {
        $this->db->insert('presents', $data);
    }

    public function getAbsensi()
    {
        $this->db->where('user_id', $this->session->userdata('email'));
        $this->db->like('date', date('m'));
        return $this->db->get('presents')->result_array();
    }

    public function getHadir()
    {
        $this->db->where('user_id', $this->session->userdata('email'));
        $this->db->where('status', 1);
        $this->db->like('date', date('m'));
        $this->db->where('information', 'M');
        return $this->db->get('presents')->num_rows();
    }

    public function getIjin()
    {
        $this->db->where('user_id', $this->session->userdata('email'));
        $this->db->where('status', 1);
        $this->db->like('date', date('m'));
        $this->db->where('information', 'I');
        return $this->db->get('presents')->num_rows();
    }

    public function getSakit()
    {
        $this->db->where('user_id', $this->session->userdata('email'));
        $this->db->where('status', 1);
        $this->db->like('date', date('m'));
        $this->db->where('information', 'S');
        return $this->db->get('presents')->num_rows();
    }
}

/* End of file ModelName.php */
