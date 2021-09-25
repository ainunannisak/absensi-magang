<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //echo 'Selamat datang ' . $data['user']['name'];

        $this->load->view('templates/app', $data);
        //$this->load->view('templates/sidebar_user', $data);
        //$this->load->view('templates/topbar', $data);
        //$this->load->view('user/index', $data);
        //$this->load->view('templates/footer');
    }
}
