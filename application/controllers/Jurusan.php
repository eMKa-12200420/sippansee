<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Jurusan';
        //$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->ModelJurusan->getJurusan()->result_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
            'required' => 'Nama Jurusan Harus di Isi'
        ]);
        $this->form_validation->set_rules('kuota', 'Kuota', 'required', [
            'required' => 'Jumlah Kuota Harus di Isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            //$this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/jurusan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'jurusan' => $this->input->post('jurusan', TRUE),
                'kuota' => $this->input->post('kuota', TRUE)
            ];

            $this->ModelJurusan->simpanJurusan($data);
            redirect('jurusan');
        }
    }

    public function ubahJurusan()
    {
        $data['judul'] = 'Ubah Data Jurusan';
        //$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->ModelJurusan->jurusanWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('jurusan', 'Nama Jurusan', 'required|min_length[3]', [
            'required' => 'Nama Jurusan harus diisi',
            'min_length' => 'Nama Jurusan terlalu pendek'
        ]);
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|min_length[2]', [
            'required' => 'Jumlah Kuota Harus Di Isi',
            'min_length' => 'Jumlah Kuota terlalu sedikit'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('administrasi/jurusan/ubah_jurusan', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'jurusan' => $this->input->post('jurusan', true),
                'kuota' => $this->input->post('kuota', true)
            ];

            $this->ModelJurusan->updateJurusan(['id' => $this->input->post('id')], $data);
            redirect('jurusan');
        }
    }

    public function hapusJurusan()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBuku->hapusJurusan($where);
        redirect('administrasi/jurusan');
    }
}
