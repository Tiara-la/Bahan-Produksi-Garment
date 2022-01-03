<?php
class Chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Member_model');
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    public function index()
    {

        $data['judul'] = 'Pengisian Data Bahan Produksi';

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
        ];
        $this->session->set_userdata($data);

        if ($user['role_id'] == 1) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('chart');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebaruser', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('chart');
            $this->load->view('templates/footer');
        }
    }
}
