<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Model');
    }


    public function index()
    {
        $data['menu'] = 'Data Warga';
        $data['title'] = 'Daftar Warga';
        $data['user'] = $this->Toko_Model->getByUsername($this->session->userdata('username'));
        $data['warga'] = $this->Toko_Model->getAll('warga');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('warga/daftar-warga', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Warga.php */
