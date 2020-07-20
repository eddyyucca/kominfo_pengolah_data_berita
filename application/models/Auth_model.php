<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function login($username, $password)
    {
        $this->db->select('id,username,password,level');
        $this->db->from('akun');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file Auth_model.php */
