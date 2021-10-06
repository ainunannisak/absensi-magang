<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{

    public function getProfile($id)
    {
        return $this->db->get_where('user', ['email' => $id])->row_array();
    }

    public function updateProfile($id, $data)
    {
        $this->db->update('user', $data, ['id_users' => $id]);
    }

    public function uploadImage()
    {
        $config = [
            'upload_path'     => 'assets/img/image/',
            'encrypt_name'    => TRUE,
            'allowed_types'   => 'jpg|jpeg|png|JPG|PNG|JPEG',
            'max_size'        => 3000,
            'max_width'       => 0,
            'max_height'      => 0,
            'overwrite'       => TRUE,
            'file_ext_tolower' => TRUE
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('image_error', 'Jenis file yang diupload tidak diizinkan atau file terlalu besar.');
            return false;
        }
    }
}

/* End of file ModelName.php */
