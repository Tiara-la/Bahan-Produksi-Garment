<?php

class Penyaluran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Penyaluran_model');
    }

    public function index()
    {
        $data['judul'] = 'Data Penyaluran Bahan Produksi';

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
        $this->db->like('no_penyaluran', $data['keyword']);
        $this->db->or_like('tgl_penyaluran', $data['keyword']);
        $this->db->or_like('no_wo', $data['keyword']);
        $this->db->or_like('bagian', $data['keyword']);
        $this->db->or_like('nama', $data['keyword']);
        $this->db->or_like('status', $data['keyword']);
        $this->db->from('penyaluran');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['penyaluran'] = $this->Penyaluran_model->getPenyaluran($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penyaluran/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {

        $data['judul'] = 'Pengisian Data Penyaluran Bahan Produksi';

        $this->form_validation->set_rules('no_pny', 'NO_PNY', 'required');
        $this->form_validation->set_rules('tgl_pny', 'TGL_PNY', 'required');
        $this->form_validation->set_rules('no_wo', 'NO_WO', 'required');
        $this->form_validation->set_rules('bagian', 'Bagian', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penyaluran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Penyaluran_model->tambahpenyaluran();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('penyaluran');
        }
    }

    public function hapus($id_penyaluran)
    {
        $this->Penyaluran_model->hapusPenyaluran($id_penyaluran);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('penyaluran');
    }


    public function ubah($id_penyaluran)
    {

        $data['judul'] = 'Edit Data Penyaluran Bahan Produksi';
        $data['penyaluran'] = $this->Penyaluran_model->getPenyaluranById($id_penyaluran);
        $data['status'] = ['Terkirim', 'Belum Terkirim', 'Proses'];

        $this->form_validation->set_rules('no_pny', 'NO_PNY', 'required');
        $this->form_validation->set_rules('tgl_pny', 'TGL_PNY', 'required');
        $this->form_validation->set_rules('no_wo', 'NO_WO', 'required');
        $this->form_validation->set_rules('bagian', 'Bagian', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penyaluran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penyaluran_model->ubahPenyaluran();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('penyaluran');
        }
    }
}
