<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "Admin") {
            redirect('admin');
        } elseif ($level_akun == "User") {
            redirect('user');
        } elseif ($level_akun == false) {
            redirect('auth');
        }
        $data['nama'] = $this->session->userdata('nama_user');
    }

    //menampilkan 
    public function index()
    {
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();

        $this->load->view("template/header", $data);
        $this->load->view("admin/admin_view");
        $this->load->view("template/footer");
    }
    //menampilkan input
    public function input()
    {

        $data['status'] = $this->admin_model->status();
        $data['sektor'] = $this->admin_model->sektor();
        $data['sentimen'] = $this->admin_model->sentimen();
        $data['level'] = $this->session->userdata('level');
        $this->load->view("template/header", $data);
        $this->load->view("admin/input_view");
        $this->load->view("template/footer");
    }
    // menampilkan edit
    public function edit($id)
    {
        $data['sektor'] = $this->admin_model->sektor();
        $data['sentimen'] = $this->admin_model->sentimen();
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->getid($id);
        $this->load->view("template/header", $data);
        $this->load->view("admin/edit_view", $data);
        $this->load->view("template/footer");
    }
    //proses input ke database
    public function prosesinput()
    {

        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'sumber' => $this->input->post('sumber'),
            'sektor' => $this->input->post('sektor'),
            'sentimen' => $this->input->post('sentimen'),
            'tautan' => $this->input->post('tautan'),
            'rekomendasi' => $this->input->post('rekomendasi'),
            'sarana' => $this->input->post('sarana'),
            'ringkasan' => $this->input->post('ringkasan'),
            'status' => "2",
        );
        $input = $this->admin_model->input($data);


        redirect('admin/input');
    }

    public function tabel()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data_berita'] = $this->admin_model->tabel_data();
        $this->load->view("template/header", $data);
        $this->load->view("admin/data_tabel", $data);
        $this->load->view("template/footer");
    }
    public function disetujui()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data_berita'] = $this->admin_model->all_data();
        $this->load->view("template/header", $data);
        $this->load->view("admin/berita_disetujui", $data);
        $this->load->view("template/footer");
    }

    public function belum_disetujui()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data_berita'] = $this->admin_model->tabel_data_belum();
        $this->load->view("template/header", $data);
        $this->load->view("admin/berita_belum_disetujui", $data);
        $this->load->view("template/footer");
    }


    public function hapus($id)
    {
        $this->db->where('id', $id);
        $hapus = $this->db->delete('berita');
        redirect('admin/tabel');
    }
    public function tampil($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->tampil_data($id);

        $this->load->view("template/header", $data);
        $this->load->view("admin/view", $data);
        $this->load->view("template/footer");
    }
    public function cek($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->tampil_data($id);

        $this->load->view("template/header", $data);
        $this->load->view("admin/view_cek", $data);
        $this->load->view("template/footer");
    }
    public function prosesedit($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'sumber' => $this->input->post('sumber'),
            'sektor' => $this->input->post('sektor'),
            'sentimen' => $this->input->post('sentimen'),
            'tautan' => $this->input->post('tautan'),
            'rekomendasi' => $this->input->post('rekomendasi'),
            'sarana' => $this->input->post('sarana'),
            'ringkasan' => $this->input->post('ringkasan'),
        );
        $update = $this->admin_model->update($data, $id);
        redirect('admin/tabel');
    }
    public function berita_disetujui($id)
    {
        $data = array(
            'status' => '1',
        );
        $update = $this->admin_model->disetujui($data, $id);
        redirect('admin/belum_disetujui');
    }
    public function print($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->tampil_data($id);

        $this->load->view('admin/print', $data);
    }
}
