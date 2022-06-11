<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Pendaftar';
        //$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // $data['pendaftar'] = $this->ModelPendaftar->getPendaftar()->result_array();
        $data['pendaftar'] = $this->ModelPendaftar->joinPendaftarJurusan()->result_array();
        $data['jurusan'] = $this->ModelJurusan->getJurusan()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pendaftar/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Data Siswa";
        $data['jurusan'] = $this->ModelJurusan->getJurusan()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pendaftar/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data['judul'] = "Data Siswa";
        //$data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();

        $this->form_validation->set_rules('nisn', 'nisn', 'required', [
            'required' => 'NISN harus diisi'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'Nama lengkap harus diisi'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'Jurusan harus dipilih'
        ]);
        $this->form_validation->set_rules('nilai_un', 'nilai_un', 'required', [
            'required' => 'Nilai UN harus diisi'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'required', [
            'required' => 'NIM harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pendaftar/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nisn' => $this->input->post('nisn', true),
                'nama' => $this->input->post('nama', true),
                'id_jurusan' => $this->input->post('jurusan', true),
                'nilai_un' => $this->input->post('nilai_un', true),
                'nim' => $this->input->post('nim', true)
            ];

            $this->ModelPendaftar->simpanPendaftar($data);
            redirect('pendaftar');
        }
    }

    public function ubah()
    {
        $data['judul'] = "Data Pendaftar";
        $data['pendaftar'] = $this->ModelPendaftar->pendaftarWhere(['id' => $this->uri->segment(3)])->result_array();
        $jurusan = $this->ModelPendaftar->joinJurusanPendaftar(['pendaftar.id' => $this->uri->segment(3)])->result_array();
        foreach ($jurusan as $j) {
            $data['id'] = $j['id_jurusan'];
            $data['j'] = $j['jurusan'];
        }
        $data['jurusan'] = $this->ModelJurusan->getJurusan()->result_array();

        $this->form_validation->set_rules('nisn', 'nisn', 'required', [
            'required' => 'NISN harus diisi'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'Nama lengkap harus diisi'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'Jurusan harus dipilih'
        ]);
        $this->form_validation->set_rules('nilai_un', 'nilai_un', 'required', [
            'required' => 'Nilai UN harus diisi'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'required', [
            'required' => 'NIM harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pendaftar/ubah', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nisn' => $this->input->post('nisn', true),
                'nama' => $this->input->post('nama', true),
                'id_jurusan' => $this->input->post('jurusan', true),
                'nilai_un' => $this->input->post('nilai_un', true),
                'nim' => $this->input->post('nim', true)
            ];

            $this->ModelPendaftar->updatePendaftar($data, ['id' => $this->input->post('id')]);
            redirect('pendaftar');
        }
    }

    public function hapus()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelPendaftar->hapusPendaftar($where);
        redirect('pendaftar');
    }
}
