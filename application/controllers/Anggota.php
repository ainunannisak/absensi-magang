<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_admin();

        $this->load->model('anggota_model', 'anggota');
    }


    public function Mahasiswa()
    {
        $data['title']    = 'Mahasiswa';
        $data['page']    = 'admin/anggota/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->anggota->getMahasiswas();

        $this->load->view('templates/app', $data);
    }

    public function Siswa()
    {
        $data['title']    = 'Siswa';
        $data['page']    = 'admin/anggota/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->anggota->getSiswas();

        $this->load->view('templates/app', $data);
    }
}

/* End of file Controllername.php */
