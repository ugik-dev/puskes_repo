<?php
class M_general extends CI_Model
{


    function get_tulisan($filter = [])
    {

        if (!empty($filter['lengkap']))
            $this->db->select('*');
        else
            $this->db->select('tulisan_id,tulisan_judul,tulisan_tanggal,tulisan_slug,tulisan_kategori_nama,tulisan_author,tulisan_jenis,tulisan_gambar,LEFT(tulisan_isi , 100) tulisan_isi');
        if (!empty($filter['tulisan_isi_c']))
            $this->db->select('LEFT(tulisan_isi , ' . $filter['tulisan_isi_c'] . ') tulisan_isi_c');

        $this->db->from('tbl_tulisan');
        if (!empty($filter['limit'])) {
            if (!empty($filter['page'])) {
                $this->db->limit($filter['limit'], ($filter['page'] - 1) * $filter['limit'], 'ASC');
            } else {
                $this->db->limit($filter['limit'], 'ASC');
            }
            $this->db->order_by('tulisan_tanggal', 'DESC');
        }
        if (!empty($filter['jenis'])) {
            $this->db->where('tulisan_jenis', $filter['jenis']);
        }
        if (!empty($filter['key'])) {
            $this->db->where('tulisan_isi like "%' . $filter['key'] . '%" OR tulisan_judul like "%' . $filter['key'] . '%" ');
        }
        if (!empty($filter['tulisan_slug'])) {
            $this->db->where('tulisan_slug', $filter['tulisan_slug']);
        }

        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    function get_tulisan_page($filter = [])
    {

        $this->db->select('count(*) as pg');

        $this->db->from('tbl_tulisan');
        if (!empty($filter['jenis'])) {
            $this->db->where('tulisan_jenis', $filter['jenis']);
        }
        if (!empty($filter['key'])) {
            $this->db->where('tulisan_isi like "%' . $filter['key'] . '%" ');
        }
        $query = $this->db->get();
        $obj_res =  $query->result_array()[0]['pg'];
        return $obj_res;
    }

    function get_komentar($filter = [])
    {

        $this->db->select('*');

        $this->db->from('tbl_komentar');
        if (!empty($filter['komentar_tulisan_id'])) {
            $this->db->where('komentar_tulisan_id', $filter['komentar_tulisan_id']);
        }

        $this->db->where('komentar_status', 1);
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    function get_galeri($filter = [])
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_album', 'tbl_galeri.galeri_album_id = tbl_album.album_id');
        if (!empty($filter['limit'])) {
            $this->db->limit($filter['limit'], 'ASC');
            $this->db->order_by('galeri_tanggal', 'DESC');
        }
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }

    function get_pengumuman($filter = [])
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');
        // $this->db->join('tbl_album','tbl_galeri.galeri_album_id = tbl_album.album_id');
        if (!empty($filter['limit'])) {
            $this->db->limit($filter['limit'], 'ASC');
            $this->db->order_by('pengumuman_tanggal', 'DESC');
        }
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }
}
