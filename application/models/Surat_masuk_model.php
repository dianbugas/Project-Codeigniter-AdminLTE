<?php 
class Surat_masuk_model extends CI_Model
{
    public function getAllSuratMasuk()
    {
        return $this->db->get('suratmasuk')->result_array();
    }
}