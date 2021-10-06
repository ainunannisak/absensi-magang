<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kehadiran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kehadiran_model', 'kehadiran');
        $this->load->helper('date');
    }

    public function tabel_kehadiran()
    {
        $data['title']   = 'Tabel Kehadiran';
        $data['page']      = 'admin/kehadiran/tabel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absensi'] = $this->kehadiran->getAllKehadiranPerDay();

        $this->load->view('templates/app', $data);
    }
}

/* End of file Controllername.php */
