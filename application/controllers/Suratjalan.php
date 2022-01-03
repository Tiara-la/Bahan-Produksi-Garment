<?php
class Suratjalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Produksi_model');
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    public function index()
    {

        $data['judul'] = 'Pengisian Data Bahan Produksi';

        $this->form_validation->set_rules('kode', 'Kode', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('safety', 'Safety', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pencetakan/suratjalan');
            $this->load->view('templates/footer');
        } else {
            $this->Produksi_model->tambahDataBahan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('data');
        }
    }
}
