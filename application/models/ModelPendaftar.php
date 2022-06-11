<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPendaftar extends CI_Model
{
    //manajemen pendaftar
    public function getPendaftar()
    {
        return $this->db->get('pendaftar');
    }

    public function pendaftarWhere($where)
    {
        return $this->db->get_where('pendaftar', $where);
    }

    public function simpanPendaftar($data = null)
    {
        $this->db->insert('pendaftar', $data);
    }

    public function updatePendaftar($data = null, $where = null)
    {
        $this->db->update('pendaftar', $data, $where);
    }

    public function hapusPendaftar($where = null)
    {
        $this->db->delete('pendaftar', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('pendaftar');
        return $this->db->get()->row($field);
    }

    public function joinPendaftarJurusan()
    {
        return $this->db->query("select pendaftar.*,
        jurusan.jurusan from pendaftar
        left join jurusan on pendaftar.id_jurusan=jurusan.id
        ");
    }

    public function joinJurusanPendaftar($where)
    {
        $this->db->select('pendaftar.id_jurusan,jurusan.jurusan');
        $this->db->from('pendaftar');
        $this->db->join('jurusan', 'jurusan.id = pendaftar.id_jurusan');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getLimitPendaftar()
    {
        $this->db->limit(5);
        return $this->db->get('pendaftar');
    }
}
