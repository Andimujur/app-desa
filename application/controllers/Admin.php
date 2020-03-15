<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('flash', 'Access Di BLOCK');
            redirect('auth');
        } else if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('flash', 'Access Di BLOCK');
            redirect('');
        }
    }
    public function index()

    {
        $data['jumlahWarga'] = count($this->Toko_Model->getAll('warga'));
        $data['title'] = 'Dashbord';
        $data['menu'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata['username']])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Admin.php */
