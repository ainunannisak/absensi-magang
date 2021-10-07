<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran_model extends CI_Model
{

    public function getKehadiran()
    {
        $format = "d-M-Y";
        $this->db->select('presents.*, user.name');
        $this->db->from('presents');
        $this->db->join('user', 'user.email = presents.user_id');
        //$this->db->where('presents.date', date($format));
        $this->db->where('status', 0);
        return $this->db->get()->result_array();
    }

    public function getAllKehadiran()
    {
        $format = "Y-M-d";
        $this->db->select('presents.*, user.name, positions.position_name');
        $this->db->from('presents');
        $this->db->join('user', 'presents.user_id = user.email');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        //$this->db->like('date', date('2021-10-04'));
        $this->db->where('status', 0);
        $this->db->order_by('id_presents', 'desc');
        return $this->db->get()->result_array();
    }

    public function getAbsensi($id)
    {
        $this->db->select('presents.user_id, presents.date, presents.time, presents.information,presents.status');
        $this->db->from('presents');
        $this->db->where('id_presents', $id);
        return $this->db->get()->row_array();
    }

    public function getRekap()
    {
        $query = "SELECT DISTINCT presents.user_id, user.name AS name, positions.position_name AS position, 
				(SELECT COUNT(information) FROM presents WHERE (information = 'M') AND (STATUS = 1) AND (presents.user_id = user.email)) AS M,
				(SELECT COUNT(information) FROM presents WHERE (information = 'I') AND (STATUS = 1) AND (presents.user_id = user.email)) AS I,
				(SELECT COUNT(information) FROM presents WHERE (information = 'S') AND (STATUS = 1) AND (presents.user_id = user.email)) AS S,
				(SELECT COUNT(information) FROM presents WHERE (STATUS = 1) AND (presents.user_id = user.email)) AS total
			FROM presents JOIN user
			ON presents.user_id = user.email
			JOIN positions ON user.position_id = positions.id_positions
			WHERE presents.status = 1
			AND MONTH(date) = MONTH(CURRENT_DATE())
			AND YEAR(date) = YEAR(CURRENT_DATE())
			GROUP BY presents.user_id";

        return $this->db->query($query)->result_array();
    }

    public function updateAbsensi($id, $data)
    {
        $this->db->update('presents', $data, ['id_presents' => $id]);
    }
}

/* End of file ModelName.php */
