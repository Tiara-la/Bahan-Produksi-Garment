<?php

class Datauser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produksi_model');
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
        $this->db->like('nama_bp', $data['keyword']);
        $this->db->or_like('kode_bp', $data['keyword']);
        $this->db->or_like('satuan_bp', $data['keyword']);
        $this->db->or_like('jml_stok', $data['keyword']);
        $this->db->or_like('safety_stok', $data['keyword']);
        $this->db->or_like('jenis', $data['keyword']);
        $this->db->from('bahan');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['bahan'] = $this->Produksi_model->getBahan($config['per_page'], $data['start'], $data['keyword']);



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaruser', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('datauser/index', $data);
        $this->load->view('templates/footer');
    }
}
