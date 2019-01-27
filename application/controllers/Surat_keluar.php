<?php
class Surat_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_keluar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Surat keluar';
        $data['suratkeluar'] = $this->Surat_keluar_model->getAllSuratKeluar();
        $this->load->view('templates/header', $data);
        $this->load->view('surat_keluar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Input Surat Kelur';
        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('dari', 'Dari');
        $this->form_validation->set_rules('kepada', 'Kepada');
        $this->form_validation->set_rules('perihal', 'Perihal');
        $this->form_validation->set_rules('lampiran', 'Lampiran');
        $this->form_validation->set_rules('surat', 'Surat');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('surat_keluar/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Surat_keluar_model->tambahDataSuratKeluar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('surat_keluar');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Surat Keluar';
        $data['surat_keluar'] = $this->Surat_keluar_model->getSuratKeluarById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('surat_keluar', $data);
        $this->load->view('templates/footer');
    }
}