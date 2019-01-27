<?php
class Verifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Verifikasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Verifikasi';
        $data['verifikasi'] = $this->Verifikasi_model->getAllVerifikasi();
        $this->load->view('templates/header', $data);
        $this->load->view('verifikasi/index', $data);
        $this->load->view('templates/footer');
    }
}