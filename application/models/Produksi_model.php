<?php 

class Produksi_model extends CI_model {
    public function getAllBahan()
    {
        return $this->db->get('bahan')->result_array();
    }

    public function getBahan($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('nama_bp', $keyword);
            $this->db->or_like('kode_bp', $keyword);
            $this->db->or_like('satuan_bp', $keyword);
            $this->db->or_like('jml_stok', $keyword);
            $this->db->or_like('safety_stok', $keyword);
            $this->db->or_like('jenis', $keyword);
        }
        return $this->db->get('bahan', $limit, $start)->result_array();
    }

    public function countAllBahan() {
        return $this->db->get('bahan')->num_rows();
    }

    public function tambahDataBahan()
    {
        $data = [
            "kode_bp" => $this->input->post('kode', true),
            "nama_bp" => $this->input->post('nama', true),
            "satuan_bp" => $this->input->post('satuan', true),
            "jml_stok" => $this->input->post('jumlah', true),
            "safety_stok" => $this->input->post('safety', true),
            "jenis" => $this->input->post('jenis', true)
        ];

        $this->db->insert('bahan', $data);
    }

    public function hapusDataBahan($kode_bp)
    {
        // $this->db->where('id', $id);
        $this->db->delete('bahan', ['kode_bp' => $kode_bp]);
    }

    public function getBahanByKode($kode_bp)
    {
        return $this->db->get_where('bahan', ['kode_bp' => $kode_bp])->row_array();
    }

    public function ubahDataBahan()
    {
        $data = [
            "kode_bp" => $this->input->post('kode', true),
            "nama_bp" => $this->input->post('nama', true),
            "satuan_bp" => $this->input->post('satuan', true),
            "jml_stok" => $this->input->post('jumlah', true),
            "safety_stok" => $this->input->post('safety', true),
            "jenis" => $this->input->post('jenis', true)
        ];

        $this->db->where('kode_bp', $this->input->post('kode_bp'));
        $this->db->update('bahan', $data);
    }

}