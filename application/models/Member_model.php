<?php

class Member_model extends CI_model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getUser($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id', $keyword);
            $this->db->or_like('name', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('role_id', $keyword);
            $this->db->or_like('is_active', $keyword);
            $this->db->or_like('date_created', $keyword);
        }
        return $this->db->get('user', $limit, $start)->result_array();
    }

    public function countAllUser()
    {
        return $this->db->get('user')->num_rows();
    }


    public function getUserById($id)
    {
        return $this->db->get_where('User', ['id' => $id])->row_array();
    }
}
