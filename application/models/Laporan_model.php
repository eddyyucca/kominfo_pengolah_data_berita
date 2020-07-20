<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    public function sentimen($sentimen, $tgl1, $tgl2)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('sentimen', $sentimen);

        $this->db->where('tanggal>=', $tgl1);
        $this->db->where('tanggal<=', $tgl2);
        $this->db->where('status', '1');

        $x =  $this->db->get();
        return $x->result();
    }
    public function cari_sentimen1($xx1, $xx2, $xx3)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('sentimen', $xx3);

        $this->db->where('tanggal>=', $xx1);
        $this->db->where('tanggal<=', $xx2);
        $this->db->where('status', '1');

        $x =  $this->db->get();
        return $x->result();
    }
    public function sektor($sektor, $tgl1, $tgl2)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('sektor', $sektor);

        $this->db->where('tanggal>=', $tgl1);
        $this->db->where('tanggal<=', $tgl2);
        $this->db->where('status', '1');
        $x =  $this->db->get();
        return $x->result();
    }
    public function cari_sektor1($xx1, $xx2, $xx3)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('sektor', $xx3);

        $this->db->where('tanggal>=', $xx1);
        $this->db->where('tanggal<=', $xx2);
        $this->db->where('status', '1');

        $x =  $this->db->get();
        return $x->result();
    }

    public function cari_tanggal($tgl1, $tgl2)
    {

        $this->db->select('*');
        $this->db->from('berita');

        $this->db->where('tanggal>=', $tgl1);
        $this->db->where('tanggal<=', $tgl2);
        $this->db->where('status', '1');
        $x =  $this->db->get();
        return $x->result();
    }
    public function cari_tanggal1($xx1,  $xx2)
    {

        $this->db->select('*');
        $this->db->from('berita');

        $this->db->where('tanggal>=',  $xx1);
        $this->db->where('tanggal<=',  $xx2);
        $this->db->where('status', '1');
        $x =  $this->db->get();
        return $x->result();
    }
    public function all_data()
    {
        $this->db->where('status', '1');
        $x = $this->db->get('berita');
        return $x->result();
    }
}

/* End of file Laporan_model.php */
