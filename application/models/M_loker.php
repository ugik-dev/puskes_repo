<?php 
class M_loker extends CI_Model{

	function get_all_loker(){
		$hsl=$this->db->query("SELECT loker_id,loker_judul,loker_deskripsi,DATE_FORMAT(loker_tanggal,'%d/%m/%Y') AS tanggal,loker_oleh,loker_download,loker_data FROM tbl_loker ORDER BY loker_id DESC");
		return $hsl;
	}
	function simpan_loker($judul,$deskripsi,$oleh,$loker){
		$hsl=$this->db->query("INSERT INTO tbl_loker(loker_judul,loker_deskripsi,loker_oleh,loker_data) VALUES ('$judul','$deskripsi','$oleh','$loker')");
		return $hsl;
	}
	function update_loker($kode,$judul,$deskripsi,$oleh,$loker){
		$hsl=$this->db->query("UPDATE tbl_loker SET loker_judul='$judul',loker_deskripsi='$deskripsi',loker_oleh='$oleh',loker_data='$loker' WHERE loker_id='$kode'");
		return $hsl;
	}
	function update_loker_tanpa_loker($kode,$judul,$deskripsi,$oleh){
		$hsl=$this->db->query("UPDATE tbl_loker SET loker_judul='$judul',loker_deskripsi='$deskripsi',loker_oleh='$oleh' WHERE loker_id='$kode'");
		return $hsl;
	}
	function hapus_loker($kode){
		$hsl=$this->db->query("DELETE FROM tbl_loker WHERE loker_id='$kode'");
		return $hsl;
	}

	function get_loker_byid($id){
		$hsl=$this->db->query("SELECT loker_id,loker_judul,loker_deskripsi,DATE_FORMAT(loker_tanggal,'%d/%m/%Y') AS tanggal,loker_oleh,loker_download,loker_data FROM tbl_loker WHERE loker_id='$id'");
		return $hsl;
	}

	//Front-end
	function get_loker_home(){
		$hsl=$this->db->query("SELECT loker_id,loker_judul,loker_deskripsi,DATE_FORMAT(loker_tanggal,'%d/%m/%Y') AS tanggal,loker_oleh,loker_download,loker_data FROM tbl_loker ORDER BY loker_id DESC limit 7");
		return $hsl;
	}
	
}