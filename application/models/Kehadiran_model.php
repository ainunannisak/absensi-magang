<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran_model extends CI_Model
{


    public function getAllKehadiranPerDay()
    {

        $format = "d-M-Y";
        $this->db->select('presents.*, user.name, positions.position_name');
        $this->db->from('presents');
        $this->db->join('user', 'user.id_users = presents.user_id');
        $this->db->join('positions', 'positions.id_positions = user.position_id');
        $this->db->like('date', date($format));
        $this->db->where('status', 0);
        $this->db->order_by('id_presents', 'desc');
        return $this->db->get()->result_array();
    }
}

/* End of file ModelName.php */
