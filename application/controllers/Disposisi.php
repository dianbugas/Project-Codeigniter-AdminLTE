<?php 
class Disposisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Disposisi_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data['judul'] = 'Halaman Judul';
        $data['disposisi'] = $this->Disposisi_model->getAllDisposisi();
        $this->load->view('templates/header', $data);
        $this->load->view('disposisi/index');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail data Disposisi';
        $data['disposisi'] = $this->Disposisi_model->getDisposisiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('disposisi/detail', $data);
        $this->load->view('templates/footer');
    }
}