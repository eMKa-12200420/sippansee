<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
        $data['provinsi'] = $get_prov->result();
        $data['path'] = base_url('assets');

        $data['judul'] = 'form pendaftaran';
        $this->load->view('templates/h_pendaftaran', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_form_pendaftaran');
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $data['judul'] = 'form pendaftaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_form_pendaftaran');
        $this->load->view('templates/footer');
    }

    public function data_pendaftar()
    {
        $data['judul'] = 'Data Pendaftar';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_data_pendaftar');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            echo "berhasil";
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis_pendaftaran', 'Jenis Pendaftaran', 'required', array('required' => '%s Jenis Pendaftaran Wajib diisi'));
        $this->form_validation->set_rules('pilihan1', 'Pilihan 1', 'required', array('required' => '%s Pilihan 1 wajib diisi'));
        $this->form_validation->set_rules('pilihan2', 'Pilihan 2', 'required', array('required' => '%s Pilihan 2 wajib diisi'));
        $this->form_validation->set_rules('nomor_seri_skhun', 'Nomor Seri SKHUN', 'required', array('required' => '%s Nomor seri SKHUN Wajib di isi'));
        $this->form_validation->set_rules('nomor_seri_ijazah', 'Nomor Seri Ijazah', 'required', array('required' => '%s Nomor Seri Ijazah Wajib di isi'));
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', array('required' => '%s Asal Sekolah Wajib di isi'));
        $this->form_validation->set_rules('nisn', 'NISN', 'required', array('required' => '%s nisn Wajib di isi'));
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array('required' => '%s Masukan Nama Lengkap'));
        $this->form_validation->set_rules('nama_panggilan', 'nama_panggilan', 'required', array('required' => '%s Masukan Nama panggilan'));
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', array('required' => '%s pilih jenis kelamin'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Tanggal Lahir Wajib di isi'));
        $this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required', array('required' => '%s Masukan alamat rumah'));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required' => '%s Kecamatan Wajib di isi'));
        $this->form_validation->set_rules('kabupaten', 'Kaupaten', 'required', array('required' => '%s Kabupaten Wajib di isi'));
        $this->form_validation->set_rules('agama', 'Agama', 'required', array('required' => '%s Pilih agama yang sesuai'));
        $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('bahasa', 'Bahasa sehari - hari', 'required', array('required' => '%s Masukan Bahasa yang digunakan sehari - hari'));
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('nomor_telephone', 'Nomor Telephone', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('hobi', 'Hobi', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('tinggal_dengan', 'Tinggal Dengan', 'required', array('required' => '%s Pilih yang sesuai'));
        // data ayah
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', array('required' => '%s Masukan Nama Ayah'));
        $this->form_validation->set_rules('tanggal_lahir_ayah', 'Tanggal Lahir', 'required', array('required' => '%s Masukan tanggal lahir ayah'));
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan', 'required', array('required' => '%s Pilih Pekerjaan ayah'));
        $this->form_validation->set_rules('agama_ayah', 'Agama', 'required', array('required' => '%s Pilih agama yang sesuai'));
        $this->form_validation->set_rules('alamat_rumah_ayah', 'Alamat Rumah', 'required', array('required' => '%s Masukan alamat rumah ayah'));
        $this->form_validation->set_rules('nomor_telephone_ayah', 'Nomor Telephone', 'required', array('required' => '%s Wajib di isi'));
        // data ibu
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', array('required' => '%s Masukan Nama ibu'));
        $this->form_validation->set_rules('tanggal_lahir_ibu', 'Tanggal Lahir', 'required', array('required' => '%s Masukan tanggal lahir ibu'));
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan', 'required', array('required' => '%s Pilih Pekerjaan ibu'));
        $this->form_validation->set_rules('agama_ibu', 'Agama', 'required', array('required' => '%s Pilih agama yang sesuai'));
        $this->form_validation->set_rules('alamat_rumah_ibu', 'Alamat Rumah', 'required', array('required' => '%s Masukan alamat rumah ibu'));
        $this->form_validation->set_rules('nomor_telephone_ibu', 'Nomor Telephone', 'required', array('required' => '%s Wajib di isi'));
        // data wali
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', array('required' => '%s Masukan Nama wali'));
        $this->form_validation->set_rules('tanggal_lahir_wali', 'Tanggal Lahir', 'required', array('required' => '%s Masukan tanggal lahir wali'));
        $this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan', 'required', array('required' => '%s Pilih Pekerjaan wali'));
        $this->form_validation->set_rules('agama_wali', 'Agama', 'required', array('required' => '%s Pilih agama yang sesuai'));
        $this->form_validation->set_rules('alamat_rumah_wali', 'Alamat Rumah', 'required', array('required' => '%s Masukan alamat rumah wali'));
        $this->form_validation->set_rules('nomor_telephone_wali', 'Nomor Telephone', 'required', array('required' => '%s Wajib di isi'));
        // file pendukung
        $this->form_validation->set_rules('upload_ijazah', 'Upload Ijazah', 'required', array('required' => '%s Wajib Upload Ijazah'));
        $this->form_validation->set_rules('upload_photo', 'Upload Photo', 'required', array('required' => '%s Wajib Upload Photo'));
        $this->form_validation->set_rules('rata_rata_nilai_un', 'Rata - Rata Nilai UN', 'required', array('required' => '%s Wajib di isi'));
        $this->form_validation->set_rules('nim', 'NIM', 'required', array('required' => '%s Wajib di isi'));
    }

    function add_ajax_kab($id_prov)
    {
        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab)
    {
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id_kec)
    {
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option value=''> - Pilih Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }
}
