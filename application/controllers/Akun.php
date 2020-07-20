<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
        $this->load->model('admin_model');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "Admin") {
            redirect('admin');
        } elseif ($level_akun == "user") {
            redirect('user');
        }

        $data['nama'] = $this->session->userdata('nama_user');
    }
    public function index()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->akun_model->akun();
        $this->load->view('template/header', $data);
        $this->load->view('akun/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah_akun()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('akun/tambah_akun');
        $this->load->view('template/footer');
    }

    public function edit_akun($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->akun_model->getakun($id);

        $this->load->view('template/header', $data);
        $this->load->view('akun/edit_akun', $data);
        $this->load->view('template/footer');
    }
    public function proses_tambah_akun()
    {

        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );

        $input = $this->akun_model->input_akun($data);
        redirect('akun/index');
    }
    public function proses_edit($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );

        $edit = $this->akun_model->edit_akun($data, $id);
        redirect('akun/index');
    }

    public function hapus_akun($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('akun');
        redirect('akun/index');
    }
}

/* End of file Akun.php */
