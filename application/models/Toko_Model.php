<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Toko_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function getRoleAccess()
    {


        $this->db->select(' 
                            user_menu.menu,user_menu.icon,user_menu.id,user_access_menu.menu_id,user_access_menu.role_id
        ');
        $this->db->from('user_menu');
        $this->db->join('user_access_menu', 'user_access_menu.menu_id=user_menu.menu_id');
        $this->db->order_by('menu_id', 'ASC');
        return  $this->db->get()->result_array();
    }

    public function getAllByKatalog($katalog)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('katalog', $katalog);
        return $this->db->get()->result_array();
    }

    public function deleteById($table, $id)
    {
        return $this->db->delete($table, ['id' => $id]);
    }

    public function getByID($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function cariData($table, $keyword)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->from($table);
        return $this->db->get()->result_array();
    }

    public function edit($id, $table, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update($table);
    }

    public function getUserSubMenu()
    {
        $this->db->select('*');
        $this->db->from('user_menu');
        $this->db->join('user_sub_menu', 'user_menu.menu_id=user_sub_menu.menu_id');

        return $this->db->get()->result_array();
    }

    public function getByUsername($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function tambahLayanan($set)
    {
        $data = [
            'layanan' => $set
        ];
        return $this->db->insert('layanan', $data);
    }
}

/* End of file Toko_Model.php */
