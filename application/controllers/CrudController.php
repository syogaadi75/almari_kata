<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CrudController extends CI_Controller
{

    public function get($table)
    {
        $data = $this->db->get($table)->result();
        echo json_encode($data);
    }

    public function getById($table, $id)
    {
        $data = $this->db->get_where($table, ['id' => $id])->row();
        echo json_encode($data);
    }

    public function insert($table)
    {
        $data = [];
        if ($table == 'kata') {

            $data = [
                'kata' => $this->input->post('kata'),
                'ejaan' => $this->input->post('ejaan'),
                'identifikasi' => $this->input->post('identifikasi'),
                'arti' => $this->input->post('arti'),
                'kategori_sintaksis' => $this->input->post('kategori_sintaksis'),
                'semantik' => $this->input->post('semantik'),
                'sosial' => $this->input->post('sosial'),
            ];
        } else if ($table == 'pertanyaan_umum') {
            $data = [
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban')
            ];
        } else if ($table == 'ide_baru') {
            $data = [
                'ide' => $this->input->post('ide')
            ];
        }

        $this->db->insert($table, $data);

        $this->session->set_flashdata('pesan', 'Berhasil menambah data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update($table, $id)
    {
        $data = [];
        if ($table == 'kata') {

            $data = [
                'kata' => $this->input->post('kata'),
                'ejaan' => $this->input->post('ejaan'),
                'identifikasi' => $this->input->post('identifikasi'),
                'arti' => $this->input->post('arti'),
                'kategori_sintaksis' => $this->input->post('kategori_sintaksis'),
                'semantik' => $this->input->post('semantik'),
                'sosial' => $this->input->post('sosial'),
            ];
        } else if ($table == 'pertanyaan_umum') {
            $data = [
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban')
            ];
        } else if ($table == 'ide_baru') {
            $data = [
                'ide' => $this->input->post('ide')
            ];
        }

        $this->db->where('id', $id);
        $this->db->update($table, $data);

        $this->session->set_flashdata('pesan', 'Berhasil menyimpan perubahan');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);

        $this->session->set_flashdata('pesan', 'Berhasil menghapus data');
        redirect($_SERVER['HTTP_REFERER']);
    }
}

/* End of file CrudController.php */
