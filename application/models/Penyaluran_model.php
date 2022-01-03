<?php 

class Penyaluran_model extends CI_model {
    public function getAllPenyaluran()
    {
        return $this->db->get('penyaluran')->result_array();
    }

    public function getPenyaluran($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('no_penyaluran', $keyword);
            $this->db->or_like('tgl_penyaluran', $keyword);
            $this->db->or_like('no_wo', $keyword);
            $this->db->or_like('bagian', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('penyaluran', $limit, $start)->result_array();
    }

    public function countAllPenyaluran() {
        return $this->db->get('penyaluran')->num_rows();
    }

    public function tambahPenyaluran()
    {
        $data = [
            "no_penyaluran" => $this->input->post('no_pny', true),
            "tgl_penyaluran" => $this->input->post('tgl_pny', true),
            "no_wo" => $this->input->post('no_wo', true),
            "bagian" => $this->input->post('bagian', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->insert('penyaluran', $data);
    }

    public function hapusPenyaluran($id_penyaluran)
    {
        // $this->db->where('id', $id);
        $this->db->delete('penyaluran', ['id_penyaluran' => $id_penyaluran]);
    }

    public function getPenyaluranById($id_penyaluran)
    {
        return $this->db->get_where('penyaluran', ['id_penyaluran' => $id_penyaluran])->row_array();
    }

    public function ubahPenyaluran()
    {
        $data = [
            "no_penyaluran" => $this->input->post('no_pny', true),
            "tgl_penyaluran" => $this->input->post('tgl_pny', true),
            "no_wo" => $this->input->post('no_wo', true),
            "bagian" => $this->input->post('bagian', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->where('id_penyaluran', $this->input->post('id_penyaluran'));
        $this->db->update('penyaluran', $data);
    }

}