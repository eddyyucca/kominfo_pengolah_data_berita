<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('laporan_model');

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


    public function sentimen()
    {
        $data['excel'] = false;
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['data'] = $this->laporan_model->all_data();
        $this->load->view('template/header', $data);
        $this->load->view('laporan/sentimen', $data);
        $this->load->view('template/footer');
    }

    public function cari_sentimen()
    {
        $tgl1 = $this->input->post('tanggal_1');
        $tgl2 = $this->input->post('tanggal_2');
        $sentimen = $this->input->post('sentimen');
        $data['excel'] = true;
        $data['tgl1'] = $tgl1;
        $data['tgl2'] = $tgl2;
        $data['sentimen'] = $sentimen;
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();

        $data['data'] = $this->laporan_model->sentimen($sentimen, $tgl1, $tgl2);
        $this->load->view('template/header', $data);
        $this->load->view('laporan/sentimen', $data);
        $this->load->view('template/footer');
    }
    public function cari_sentimen_excel($x1 = null, $x2 = null, $sentimen = null)
    {
        $xx1 = substr($x1, 0, 10);
        $xx2 = substr($x1, 10, 10);
        $sentimen =  substr($x1, 20);
        $xx3 = $sentimen;
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['excel'] = true;
        $data['xx1'] = $xx1;
        $data['xx2'] = $xx2;
        $data['sentimen'] = $xx3;

        $data['xx'] = $this->laporan_model->cari_sentimen1($xx1, $xx2, $xx3);
        $this->load->view('laporan/excel_sentimen', $data);
    }

    public function sektor()
    {

        $tgl1 = $this->input->post('tanggal_1');
        $tgl2 = $this->input->post('tanggal_2');
        $sektor = $this->input->post('sektor');
        $data['excel'] = false;
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['data'] = $this->laporan_model->all_data();

        $this->load->view('template/header', $data);
        $this->load->view('laporan/sektor', $data);
        $this->load->view('template/footer');
    }

    public function cari_sektor()
    {

        $tgl1 = $this->input->post('tanggal_1');
        $tgl2 = $this->input->post('tanggal_2');
        $sektor = $this->input->post('sektor');
        $data['excel'] = true;
        $data['tgl1'] = $tgl1;
        $data['tgl2'] = $tgl2;
        $data['sektor'] = $sektor;
        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();

        $data['data'] = $this->laporan_model->sektor($sektor, $tgl1, $tgl2);

        $this->load->view('template/header', $data);
        $this->load->view('laporan/sektor', $data);
        $this->load->view('template/footer');
    }
    public function cari_sektor_excel($x1 = null, $x2 = null, $sektor = null)
    {
        $xx1 = substr($x1, 0, 10);
        $xx2 = substr($x1, 10, 10);
        $sektor =  substr($x1, 20);
        $xx3 = str_replace("%20", " ", $sektor);

        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['excel'] = true;
        $data['xx1'] = $xx1;
        $data['xx2'] = $xx2;
        $data['sektor'] = $xx3;

        $data['xx'] = $this->laporan_model->cari_sektor1($xx1, $xx2, $xx3);
        $this->load->view('laporan/excel_sektor', $data);
    }


    public function cari_tgl()
    {
        $tgl1 = $this->input->post('tanggal_1');
        $tgl2 = $this->input->post('tanggal_2');


        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['excel'] = true;
        $data['tgl1'] = $tgl1;
        $data['tgl2'] = $tgl2;
        $data['data'] = $this->laporan_model->cari_tanggal($tgl1, $tgl2);
        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_tanggal', $data);
        $this->load->view('template/footer');
    }
    public function laporan_tanggal()
    {
        $tgl1 = $this->input->post('tanggal_1');
        $tgl2 = $this->input->post('tanggal_2');

        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['data'] = $this->laporan_model->all_data();
        $data['excel'] = false;
        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_tanggal', $data);
        $this->load->view('template/footer');
    }
    public function cari_tgl_excel($x1 = null, $x2 = null)
    {
        $xx1 = substr($x1, 0, 10);
        $xx2 = substr($x1, 10, 10);

        $data['level'] = $this->session->userdata('level');
        $data['status'] = $this->admin_model->status();
        $data['excel'] = true;
        $data['xx1'] = $xx1;
        $data['xx2'] = $xx2;

        $data['xx'] = $this->laporan_model->cari_tanggal1($xx1, $xx2);
        $this->load->view('laporan/excel_tanggal', $data);
    }
}

/* End of file Laporan.php */
