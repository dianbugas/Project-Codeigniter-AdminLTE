<?php
class Divisi_model extends CI_Model
{
    public function getAllDivisi()
    {
        return $this->db->get('divisi')->result_array();
    }
}