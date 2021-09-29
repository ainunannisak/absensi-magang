<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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

    public function edit()
    {

        if ($this->form_validation->run() == FALSE) {
            $data['title']        = 'Ubah Anggota';
            $data['page']        = 'admin/anggota/edit';
            $id = $this->session->userdata('id');
            $data['user']     = $this->anggota->getUser($id);
            $data['position'] = $this->anggota->getPosition();

            $this->load->view('templates/app', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'position_id' => $this->input->post('position_id'),
            ];

            $id = $this->session->userdata('id');
            $this->anggota->updateUser($id, $data);
            $this->session->set_flashdata('message', 'Data anggota berhasil ditambahkan.');

            if ($data['position_id'] == 1) {
                redirect(base_url('anggota/Siswa'));
            } else if ($data['position_id'] == 2) {
                redirect(base_url('anggota/Mahasiswa'));
            }
        }
    }
}

/* End of file Profile.php */
