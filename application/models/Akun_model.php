<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{

    public function akun()
    {
        $data = $this->db->get('akun');
        return $data->result();
    }
    public function input_akun($data)
    {
        $this->db->insert('akun', $data);
    }
    public function getakun($id)
    {
        $this->db->where('id', $id);

        $data = $this->db->get('akun');

        return $data->row();
    }
    public function edit_akun($data, $id)
    {
        $this->db->where('id', $id);

        $this->db->update('akun', $data);
    }
}

/* End of file Akun_model.php */
