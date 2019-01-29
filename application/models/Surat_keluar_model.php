<?php
class Surat_keluar_model extends CI_Model
{
    public function getAllSuratKeluar()
    {
        return $this->db->get('suratkeluar')->result_array();
    }

    public function tambahDataSuratkeluar()
    {
        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "dari" => $this->input->post('dari', true),
            "kepada" => $this->input->post('kepada', true),
            "perihal" => $this->input->post('perihal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "keterangan" => $this->input->post('keterangan', true),
            "surat" => $this->input->post('surat', true)
        ];
        $this->db->insert('surat_keluar', $data);
    }

    public function getSuratKeluarById($id)
    {
        return $this->db->get_where('suratkeluar', ['id' => $id])->row_array();
    }
}