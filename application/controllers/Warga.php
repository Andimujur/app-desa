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
        $keyword = $this->input->post('keyword');
        if ($keyword != NULL) {
            $data['warga'] = $this->Toko_Model->cariData('warga', $keyword);
        } else {

            $data['warga'] = $this->Toko_Model->getAll('warga');
        }
        $data['menu'] = 'Data Warga';
        $data['title'] = 'Daftar Warga';
        $data['user'] = $this->Toko_Model->getByUsername($this->session->userdata('username'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('warga/daftar-warga', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Warga.php */
