<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    //  user access control
    public function __construct()
    {
        parent::__construct();
        is_login();
        is_admin();
        $this->load->model('admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('templates/app', $data);
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang ' . $data['user']['name'];

        //$this->load->view('templates/app', $data);
        //$this->load->view('templates/sidebar_admin', $data);
        //$this->load->view('templates/topbar', $data);
        //$this->load->view('admin/index', $data);
        //this->load->view('templates/footer');
    }
}
