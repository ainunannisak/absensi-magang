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
        $data['page'] = 'dashboard/index';
        $this->load->view('templates/app', $data);
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang ' . $data['user']['name'];

        //$this->load->view('templates/app', $data);
        //$this->load->view('templates/sidebar_admin', $data);
        //$this->load->view('templates/topbar', $data);
        //$this->load->view('admin/index', $data);
        //this->load->view('templates/footer');
    }

    public function change_password()
    {
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
