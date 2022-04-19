<?php
class M_menu extends CI_Model
{


    function get_menu($filter = [])
    {
        if (!empty($filter['lengkap']))
            $this->db->select('*');
        else
            $this->db->select('id_menu,kategori,nama_menu,slug, status');

        // if(!empty($filter['limit'])){
        //     $this->db->limit($filter['limit'],'ASC');
        //     $this->db->order_by('menu_tanggal','DESC');
        // }
        if (!empty($filter['id_menu'])) $this->db->where('id_menu', $filter['id_menu']);
        if (!empty($filter['kategori'])) $this->db->where('kategori', $filter['kategori']);
        if (!empty($filter['slug'])) $this->db->where('slug', $filter['slug']);

        $this->db->from('menu');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    function get_pegawai($filter = [])
    {
        $this->db->select('*');

        $this->db->from('tbl_pegawai');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    function get_galeri($filter = [])
    {
        $this->db->select('*');

        $this->db->from('tbl_galeri');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }


    function get_bank_data($filter = [])
    {
        $this->db->select('*');

        $this->db->from('tbl_files');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    public function add($data)
    {
        $this->db->insert('menu', DataStructure::slice($data, ['kategori', 'nama_menu', 'konten', 'slug', 'status', 'no_urut']));
        ExceptionHandler::handleDBError($this->db->error(), "Tambah Bank gagal", "kode_bank");
        return $this->db->insert_id();
    }

    public function edit($data)
    {
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->update('menu', DataStructure::slice($data, ['kategori', 'nama_menu', 'konten', 'slug', 'status', 'no_urut'], TRUE));
        ExceptionHandler::handleDBError($this->db->error(), "Edit Bank gagal", "kode_bank");

        return $data['id_menu'];
    }

    public function delete($data)
    {
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->delete('menu');

        ExceptionHandler::handleDBError($this->db->error(), "Gagal Hapus Menu", "menu");
    }
}
