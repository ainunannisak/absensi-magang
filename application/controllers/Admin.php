<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    //  user access control
    public function __construct()
    {
        parent::__construct();
        is_admin();
        is_login();
        $this->load->model('admin_model', 'admin');
        $this->load->model('dashboard_model', 'dashboard');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page'] = 'admin/dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggotaM'] = $this->dashboard->anggotaM();
        $data['anggotaS'] = $this->dashboard->anggotaS();
        $data['kehadiran_dikonfirmasi'] = $this->dashboard->kehadiran_dikonfirmasi();
        $data['menunggu_konfirmasi'] = $this->dashboard->menunggu_konfirmasi();
        $this->load->view('templates/app', $data);
    }

    public function profile()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email tidak boleh kosong.',
            'is_unique' => 'Email sudah terdaftar.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title']        = 'Data Admin';
            $data['page']         = 'admin/profile/profile';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['admin']        = $this->admin->getAdminProfile();
            $data['position'] = $this->admin->getPosition();

            $this->load->view('templates/app', $data);
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),

            ];

            $this->admin->updateProfile($data);
            $this->session->set_flashdata('message', 'Data admin berhasil diupdate.');

            redirect(base_url('admin'));
        }
    }

    public function change_password()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('new_password', 'Password Baru', 'required|trim', [
            'required' => 'Password baru tidak boleh kosong.',
        ]);
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|trim|matches[new_password]', [
            'required' => 'Konfirmasi password tidak boleh kosong.',
            'matches'  => 'Konfirmasi password tidak sesuai'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title']        = 'Ubah Password';
            $data['page']         = 'admin/profile/password';

            $this->load->view('templates/app', $data);
        } else {

            $data = [
                'password' => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT),
            ];

            $this->admin->updatePassword($data);
            $this->session->set_flashdata('message', 'Password berhasil diupdate.');

            redirect(base_url('admin'));
        }
    }
}
