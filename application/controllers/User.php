<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'admin_model');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "User") {
            redirect('user');
        } elseif ($level_akun == "Admin") {
            redirect('admin');
        } elseif ($level_akun == false) {
            redirect('auth');
        }

        $data['nama'] = $this->session->userdata('nama_user');
    }

    public function index()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');

        $this->load->view('template/user/header', $data);
        $this->load->view('user/index');
        $this->load->view('template/user/footer');
    }

    public function input()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $this->load->view("template/user/header", $data);
        $this->load->view("user/input_view");
        $this->load->view("template/user/footer");
    }
    // menampilkan edit
    public function edit($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->getid($id);
        $this->load->view("template/user/header", $data);
        $this->load->view("user/edit_view", $data);
        $this->load->view("template/user/footer");
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


        redirect('user/input');
    }

    public function tabel()
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data_berita'] = $this->admin_model->tabel_data();
        $this->load->view("template/user/header", $data);
        $this->load->view("user/data_tabel", $data);
        $this->load->view("template/user/footer");
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $hapus = $this->db->delete('berita');
        redirect('user/tabel');
    }
    public function tampil($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->tampil_data($id);

        $this->load->view("template/user/header", $data);
        $this->load->view("user/view", $data);
        $this->load->view("template/user/footer");
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
        redirect('user/tabel');
    }
    public function print($id)
    {
        $data['status'] = $this->admin_model->status();
        $data['level'] = $this->session->userdata('level');
        $data['data'] = $this->admin_model->tampil_data($id);

        $this->load->view('user/print', $data);
    }
}

/* End of file User.php */
