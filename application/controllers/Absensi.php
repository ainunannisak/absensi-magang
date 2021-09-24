<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

    public function entri()
    {
        $data['title'] = 'Entri Kehadiran';
        $data['page']    = 'user/kehadiran/entri';

        $this->load->view('templates/footer', $data);
    }

    public function masuk()
    {
        $data = [
            'user_id'        => $this->session->userdata('id_users'),
            'date'            => date('Y-m-d'),
            'time'            => date('H:i:s'),
            'information'    => 'M',
            'status'            => 0
        ];

        $this->absensi->insertEntri($data);
        $this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

        redirect(base_url('absensi/entri'));
    }

    public function ijin()
    {
        $data = [
            'user_id'        => $this->session->userdata('id_users'),
            'date'            => date('Y-m-d'),
            'time'            => date('H:i:s'),
            'information'    => 'I',
            'status'            => 0
        ];

        $this->absensi->insertEntri($data);
        $this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

        redirect(base_url('absensi/entri'));
    }

    public function sakit()
    {
        $data = [
            'user_id'        => $this->session->userdata('id_users'),
            'date'            => date('Y-m-d'),
            'time'            => date('H:i:s'),
            'information'    => 'S',
            'status'            => 0
        ];

        $this->absensi->insertEntri($data);
        $this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

        redirect(base_url('absensi/entri'));
    }
}
