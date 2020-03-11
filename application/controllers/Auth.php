<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'app desa';
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'USERNAME', 'trim|required');
        $this->form_validation->set_rules('password', 'PASSWORD', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            $user  = $this->db->get_where('user', ['username' => $username])->row_array();
            if ($user != NULL) {
                if ($password == $user['password']) {
                    $role_id = $user['role_id'];
                    $userdata = [
                        'username' => $username,
                        'role_id' => $role_id
                    ];
                    $this->session->set_userdata($userdata);
                    if ($role_id == 1) {
                        $this->session->set_flashdata('flash', 'Selamat datang di Toko ');
                        redirect('admin');
                    } else {
                        $this->session->set_flashdata('flash', 'Selamat datang di Toko ');
                        redirect('barang/bangunan');
                    }
                } else {
                    $this->session->set_flashdata('flash', 'Password Salah !');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('flash', 'Akun Tidak Terdaftar');
                redirect('auth');
            }
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->flashdata('flash', 'Selamat Datang Kembali !!');

        redirect('auth');
    }
}

/* End of file Auth.php */
