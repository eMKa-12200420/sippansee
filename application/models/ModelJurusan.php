<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelJurusan extends CI_Model
{
    public function getJurusan()
    {
        return $this->db->get('jurusan');
    }

    public function jurusanWhere($where)
    {
        return $this->db->get_where('jurusan', $where);
    }

    public function simpanJurusan($data = null)
    {
        $this->db->insert('jurusan', $data);
    }

    public function hapusJurusan($where = null)
    {
        $this->db->delete('jurusan', $where);
    }

    public function updateJurusan($where = null, $data = null)
    {
        $this->db->update('jurusan', $data, $where);
    }
}
