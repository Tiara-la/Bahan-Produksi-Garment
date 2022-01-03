<?php

class Penerimaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Penerimaan_model');
    }

    public function index()
    {
        $data['judul'] = 'Data Bahan Produksi';

        //load library
        $this->load->library('pagination');

        //ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('tgl_penerimaan', $data['keyword']);
        $this->db->or_like('deskripsi', $data['keyword']);
        $this->db->or_like('satuan', $data['keyword']);
        $this->db->or_like('no_sj', $data['keyword']);
        $this->db->or_like('tgl_sj', $data['keyword']);
        $this->db->or_like('jumlah', $data['keyword']);
        $this->db->from('penerimaan');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['penerimaan'] = $this->Penerimaan_model->getPenerimaan($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penerimaan/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {

        $data['judul'] = 'Pengisian Data Penerimaan Bahan Produksi';

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('no_sj', 'NO_SJ', 'required|numeric');
        $this->form_validation->set_rules('tgl_sj', 'TGL_SJ', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penerimaan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Penerimaan_model->tambahPenerimaan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('penerimaan');
        }
    }

    public function hapus($id_penerimaan)
    {
        $this->Penerimaan_model->hapusPenerimaan($id_penerimaan);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('penerimaan');
    }


    public function ubah($id_penerimaan)
    {

        $data['judul'] = 'Edit Data Penerimaan Bahan Produksi';
        $data['penerimaan'] = $this->Penerimaan_model->getPenerimaanById($id_penerimaan);

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('no_sj', 'NO_SJ', 'required|numeric');
        $this->form_validation->set_rules('tgl_sj', 'TGL_SJ', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penerimaan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penerimaan_model->ubahPenerimaan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('penerimaan');
        }
    }
}
