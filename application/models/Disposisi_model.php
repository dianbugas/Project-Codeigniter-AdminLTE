<?php 
class Disposisi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('disposisi')->result_array();
    }

    public function getDisposisiById($id)
    {
        return $this->db->get_where('disposisi', ['id' => $id])->row_array();
    }
}