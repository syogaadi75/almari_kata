<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('username'))) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data['kata'] = $this->db->get('kata')->result();
        $this->load->view('admin/data_kata', $data);
    }

    public function pertanyaanUmum()
    {
        $data['pertanyaanUmum'] = $this->db->get('pertanyaan_umum')->result();
        $this->load->view('admin/kelola_pertanyaan_umum', $data);
    }

    public function ideBaru()
    {
        $data['ideBaru'] = $this->db->get('ide_baru')->result();
        $this->load->view('admin/kelola_ide_baru', $data);
    }
}

/* End of file AdminController.php */
