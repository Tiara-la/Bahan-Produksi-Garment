<?php

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('History_model');
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
        $this->db->like('id', $data['keyword']);
        $this->db->or_like('name', $data['keyword']);
        $this->db->or_like('tgl_login', $data['keyword']);
        $this->db->or_like('role_id', $data['keyword']);
        $this->db->from('histori');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['histori'] = $this->History_model->getHistory($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akun/history', $data);
        $this->load->view('templates/footer');
    }
}
