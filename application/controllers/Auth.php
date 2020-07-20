<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $data['kesalahan'] = false;
        $this->load->view('auth/header');
        $this->load->view('auth/index', $data);
        $this->load->view('auth/footer');
    }



    public function login_proses()
    {
        $username = $this->input->post('username');
        $password =  md5($this->input->post('password'));

        $cek = $this->auth_model->login($username, $password);

        if ($cek == true) {

            foreach ($cek as $row);
            $this->session->set_userdata('id', $row->id);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);

            if ($this->session->userdata('level') == "Admin") {
                redirect('admin/index');
            } elseif ($this->session->userdata('level') == "User") {
                redirect('user/index');
            }
        } elseif ($cek == false) {
            $data['kesalahan'] = ' <div class="alert alert-danger" role="alert">
            Terjadi kesalahan,ulangi login !
            </div>';
            $this->load->view('auth/header');
            $this->load->view('auth/index', $data);
            $this->load->view('auth/footer');
        }
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
/* End of file Auth.php */
