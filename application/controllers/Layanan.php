<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('flash', 'Access Di BLOCK');
            redirect('auth');
        }
    }

    public function index()
    {

        $keyword = $this->input->post('keyword');
        if ($keyword != NULL) {
            $data['layanan'] =   $this->Toko_Model->cariLayanan($keyword);
            if ($data['layanan'] == NULl) {
                $this->session->flashdata('flash', 'Data Tidak Di Temukan');
                $data['layanan'] = $this->Toko_Model->getAll('layanan');
            }
        } else {

            $data['layanan'] = $this->Toko_Model->getAll('layanan');
        }

        $data['menu'] = 'layanan';
        $data['title'] = 'Daftar Layanan';
        $data['user'] = $this->Toko_Model->getByUsername($this->session->userdata('username'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('layanan/daftar-layanan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahLayanan()
    {
        $this->form_validation->set_rules('layanan', 'Layanan', 'trim|required|min_length[5]');
        $layanan  = $this->input->post('layanan');
        if ($this->form_validation->run() == TRUE) {
            $this->Toko_Model->tambahLayanan($layanan);
            $this->session->flashdata('flash', 'Layanan Berhasil di tambahkan');
            redirect('layanan/index');
        } else {
            # code...
        }
    }

    public function deleteLayanan($id)
    {
        $this->Toko_Model->deleteById('layanan', $id);
        $this->session->flashdata('flash', 'Berhasil Di hapus');
        redirect('layanan/index');
    }

    public function recordLayanan()
    {
        $data['user'] = $this->Toko_Model->getByUsername($this->session->userdata('username'));
    }
}

/* End of file Layanan.php */
