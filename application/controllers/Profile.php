<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('profile_model', 'profile');
        $this->load->model('anggota_model', 'anggota');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $user = $this->profile->getProfile($id);

        $data['title']        = 'Profile';
        $data['page']         = 'user/profile/index';
        $data['user']        = $user;
        $data['position'] = $this->anggota->getPosition();

        $this->load->view('templates/app', $data);
    }
}

/* End of file Profile.php */
