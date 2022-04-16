<?php
class M_pengaturan extends CI_Model
{

    function get_profil()
    {
        $this->db->from('profil');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res[0];
    }

    function get_header()
    {
        $this->db->from('header');
        $query = $this->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }
    public function update_profil($data)
    {
        $this->db->where('id', '1');
        $this->db->update('profil', DataStructure::slice($data, ['nama_puskesmas', 'no_telp', 'alamat', 'no_wa', 'email', 'logo', 'kata_sambutan', 'kapus_img', 'sos_yt', 'sos_fb', 'sos_ig', 'sos_linkedin', 'sos_twiter'], TRUE));
        ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "profil");

        // return $data['id_product'];
    }

    public function add_header($data)
    {
        // $this->db->where('id', '1');
        $this->db->insert('header', DataStructure::slice($data, ['posisi', 'h1', 'h2', 'h3', 'header_image', 'dark_effect'], FALSE));
        ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "beader");

        // return $data['id_product'];
    }

    public function update_header($data)
    {
        $this->db->where('id_header', $data['id_header']);
        $this->db->update('header', DataStructure::slice($data, ['posisi', 'h1', 'h2', 'h3', 'header_image', 'dark_effect'], FALSE));
        ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "header");

        // return $data['id_product'];
    }



    function delete_header($kode)
    {
        // echo $kode;
        $hsl = $this->db->query("DELETE FROM header WHERE id_header='$kode'");
        // var_dump($this->db->error());
        // die();
        return $hsl;
    }

    //front-end
    function get_agenda_home()
    {
        $hsl = $this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit 3");
        return $hsl;
    }
    function agenda()
    {
        $hsl = $this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC");
        return $hsl;
    }
    function agenda_perpage($offset, $limit)
    {
        $hsl = $this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit $offset,$limit");
        return $hsl;
    }
}
