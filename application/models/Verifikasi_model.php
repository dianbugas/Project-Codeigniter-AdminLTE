<?php
class Verifikasi_model extends CI_Model
{
    public function getAllVerifikasi()
    {
        return $this->db->get('verifikasi')->result_array();
    }
}