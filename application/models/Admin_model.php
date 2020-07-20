<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    //proses input data
    public function input($data)
    {
        $this->db->insert('berita', $data);
    }

    //proses mengambil data tabel berita
    public function tabel_data()
    {
        $this->db->where('status', '1');
        $berita = $this->db->get('berita');
        return $berita->result();
    }

    public function tabel_data_belum()
    {
        $this->db->where('status', '2');
        $berita = $this->db->get('berita');
        return $berita->result();
    }

    public function tampil_data($id)
    {
        $this->db->where('id', $id);
        $x = $this->db->get('berita');

        return $x->row();
    }
    public function getid($id)
    {
        $this->db->where('id', $id);
        $x = $this->db->get('berita');
        return $x->row();
    }
    public function update($data, $id)
    {
        $this->db->where('id', $id);

        $this->db->update('berita', $data);
    }
    public function disetujui($data, $id)
    {
        $this->db->where('id', $id);

        $this->db->update('berita', $data);
    }

    public function status()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('status', 2);
        return $this->db->get()->result();
    }
    public function all_data()
    {
        $this->db->where('status', '1');
        $x = $this->db->get('berita');
        return $x->result();
    }

    public function sektor()
    {
        return $this->db->get('sektor')->result();
    }
    public function sentimen()
    {
        return $this->db->get('sentimen')->result();
    }
}
