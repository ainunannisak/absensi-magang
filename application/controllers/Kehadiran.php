<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class Kehadiran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kehadiran_model', 'kehadiran');
        $this->load->helper('date');
    }

    public function konfirmasi_kehadiran()
    {
        $data['title']     = 'Konfirmasi Kehadiran';
        $data['page']        = 'admin/kehadiran/konfirmasi';
        $data['absensi']    = $this->kehadiran->getKehadiran();

        $this->load->view('templates/app', $data);
    }

    public function konfirmasi($id)
    {
        $data = $this->kehadiran->getAbsensi($id);
        $data['status'] = 1;

        $this->kehadiran->updateAbsensi($id, $data);
        $this->session->set_flashdata('message', 'Absensi berhasil dikonfirmasi.');

        redirect(base_url('kehadiran/konfirmasi_kehadiran'));
    }

    public function tolak($id)
    {
        $data = $this->kehadiran->getAbsensi($id);
        $data['status'] = 2;

        $this->kehadiran->updateAbsensi($id, $data);
        $this->session->set_flashdata('message', 'Absensi berhasil ditolak.');

        redirect(base_url('kehadiran/konfirmasi_kehadiran'));
    }

    public function tabel_kehadiran()
    {
        $data['title']   = 'Tabel Kehadiran';
        $data['page']      = 'admin/kehadiran/tabel';
        $data['absensi'] = $this->kehadiran->getAllKehadiranPerDay();

        $this->load->view('templates/app', $data);
    }
}

/* End of file Controllername.php */
