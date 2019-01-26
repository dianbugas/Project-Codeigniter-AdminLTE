<?php
class Surat_masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_masuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Surat Masuk';
        $data['suratmasuk'] = $this->Surat_masuk_model->getAllSuratMasuk();
        $this->load->view('templates/header', $data);
        $this->load->view('surat_masuk/index', $data);
        $this->load->view('templates/footer');
    }
}
