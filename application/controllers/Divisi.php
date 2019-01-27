<?php
class Divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Divisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Divisi';
        $data['divisi'] = $this->Divisi_model->getAllDivisi();
        $this->load->view('templates/header', $data);
        $this->load->view('divisi/index', $data);
        $this->load->view('templates/footer');
    }
}
