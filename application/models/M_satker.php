<?php 
class M_satker extends CI_Model{

	function get_all_satker(){
		$hsl=$this->db->query("SELECT * FROM tbl_satker");
		return $hsl;
	}

	function simpan_satker($nama){
		$hsl=$this->db->query("INSERT INTO tbl_satker (satker_nama) VALUES ('$nama')");
		return $hsl;
	}
	

	function update_satker($kode,$nama){
		$hsl=$this->db->query("UPDATE tbl_satker SET satker_nama='$nama' WHERE satker_id='$kode'");
		return $hsl;
	}
	
	function hapus_satker($kode){
		$hsl=$this->db->query("DELETE FROM tbl_satker WHERE satker_id='$kode'");
		return $hsl;
	}

	//front-end
	function satker(){
		$hsl=$this->db->query("SELECT * FROM tbl_satker");
		return $hsl;
	}
	function satker_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_satker limit $offset,$limit");
		return $hsl;
	}

}