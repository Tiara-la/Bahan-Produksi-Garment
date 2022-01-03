<?php

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Member_model');
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
        $this->db->or_like('email', $data['keyword']);
        $this->db->or_like('role_id', $data['keyword']);
        $this->db->or_like('is_active', $data['keyword']);
        $this->db->or_like('date_created', $data['keyword']);
        $this->db->from('user');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->Member_model->getUser($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akun/member', $data);
        $this->load->view('templates/footer');
    }
}
