<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LandingPageController extends CI_Controller
{

    public function index()
    {
        $data['kata'] = $this->db->get('kata')->result();
        $this->load->view('landing_page/laman_utama', $data);
    }

    public function lis_kata()
    {
        $data['kata'] = $this->db->get('kata')->result();
        $this->load->view('landing_page/lis_kata', $data);
    }

    public function tentang()
    {

        $this->load->view('landing_page/tentang');
    }

    public function pertanyaan_umum()
    {
        $data['pertanyaanUmum'] = $this->db->get('pertanyaan_umum')->result();
        $this->load->view('landing_page/pertanyaan_umum', $data);
    }

    public function ide_baru()
    {

        $this->load->view('landing_page/ide_baru');
    }

    public function detail_kata($id = null)
    {
        $data = [];
        $kata = $this->input->post('kata');
        if (!$id) {
            if (empty($kata)) {
                $this->session->set_flashdata('pesan', 'Silahkan mengisi kata terlebih dahulu');
                redirect($_SERVER['HTTP_REFERER']);
            }

            $data['kata'] = $this->db->get_where('kata', ['kata' => $kata])->row();

            if (!$data['kata']) {
                $this->session->set_flashdata('pesan', 'Mohon maaf kata "' . $kata . '" belum terdaftar');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $data['kata'] = $this->db->get_where('kata', ['id' => $id])->row();
        }
        $this->load->view('landing_page/detail_kata', $data);
    }

    public function tambahIdeBaru()
    {
        $ide = $this->input->post('ide');
        if (empty($ide)) {
            $this->session->set_flashdata('pesan', 'Silahkan mengisi ide Anda terlebih dahulu');
            redirect(base_url('ide-baru'));
        }
        $data = ['ide' => $ide];
        $this->db->insert('ide_baru', $data);
        $this->session->set_flashdata('pesan_success', 'Ide Anda telah kami simpan di dalam database kami');
        redirect(base_url('ide-baru'));
    }
}

/* End of file LandingPageController.php */
