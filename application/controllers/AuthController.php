<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

    public function index()
    {

        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->db->get_where('users', ['username' => $username]);
        if ($cek->num_rows() > 0) {
            if (password_verify($password, $cek->row()->password)) {

                $array = array(
                    'username' => $username
                );

                $this->session->set_userdata($array);
                redirect(base_url('data-kata'));
            } else {
                $this->session->set_flashdata('pesan', 'Password salah');
                redirect(base_url('login'));
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username tidak terdaftar');
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

/* End of file AuthController.php */
