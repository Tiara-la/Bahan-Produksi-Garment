<?php

class History_model extends CI_model
{
    public function getAllHistory()
    {
        return $this->db->get('histori')->result_array();
    }

    public function getHistory($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id', $keyword);
            $this->db->or_like('name', $keyword);
            $this->db->or_like('tgl_login', $keyword);
            $this->db->or_like('role_id', $keyword);
        }
        return $this->db->get('histori', $limit, $start)->result_array();
    }

    public function countAllHistory()
    {
        return $this->db->get('historu')->num_rows();
    }


    public function getHistoryById($id)
    {
        return $this->db->get_where('History', ['id' => $id])->row_array();
    }
}
