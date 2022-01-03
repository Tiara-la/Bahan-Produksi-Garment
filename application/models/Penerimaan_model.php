<?php 

class Penerimaan_model extends CI_model {
    public function getAllPenerimaan()
    {
        return $this->db->get('penerimaan')->result_array();
    }

    public function getPenerimaan($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('tgl_penerimaan', $keyword);
            $this->db->or_like('deskripsi', $keyword);
            $this->db->or_like('satuan', $keyword);
            $this->db->or_like('no_sj', $keyword);
            $this->db->or_like('tgl_sj', $keyword);
            $this->db->or_like('supplier', $keyword);
            $this->db->or_like('jumlah', $keyword);
        }
        return $this->db->get('penerimaan', $limit, $start)->result_array();
    }

    public function countAllPenerimaan() {
        return $this->db->get('penerimaan')->num_rows();
    }

    public function tambahPenerimaan()
    {
        $data = [
            "tgl_penerimaan" => $this->input->post('tanggal', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "satuan" => $this->input->post('satuan', true),
            "no_sj" => $this->input->post('no_sj', true),
            "tgl_sj" => $this->input->post('tgl_sj', true),
            "supplier" => $this->input->post('supplier', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->insert('penerimaan', $data);
    }

    public function hapusPenerimaan($id_penerimaan)
    {
        // $this->db->where('id', $id);
        $this->db->delete('penerimaan', ['id_penerimaan' => $id_penerimaan]);
    }

    public function getPenerimaanById($id_penerimaan)
    {
        return $this->db->get_where('penerimaan', ['id_penerimaan' => $id_penerimaan])->row_array();
    }

    public function ubahPenerimaan()
    {
        $data = [
            "tgl_penerimaan" => $this->input->post('tanggal', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "satuan" => $this->input->post('satuan', true),
            "no_sj" => $this->input->post('no_sj', true),
            "tgl_sj" => $this->input->post('tgl_sj', true),
            "supplier" => $this->input->post('supplier', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->where('id_penerimaan', $this->input->post('id_penerimaan'));
        $this->db->update('penerimaan', $data);
    }

}