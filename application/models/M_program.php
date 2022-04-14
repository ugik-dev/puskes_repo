<?php
class M_program extends CI_Model{

	function get_all_program(){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program ORDER BY program_id DESC");
		return $hsl;
	}
	function simpan_program($judul,$isi,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_program(program_judul,program_isi,program_img_slider,program_pengguna_id,program_author,program_gambar,program_slug) values ('$judul','$isi','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;	
	}
	function get_program_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program where program_id='$kode'");
		return $hsl;
	}
	function update_program($program_id,$judul,$isi,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_program set program_judul='$judul',program_isi='$isi',program_img_slider='$imgslider',program_pengguna_id='$user_id',program_author='$user_nama',program_gambar='$gambar',program_slug='$slug' where program_id='$program_id'");
		return $hsl;
	}
	function update_program_tanpa_img($program_id,$judul,$isi,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_program set program_judul='$judul',program_isi='$isi',program_img_slider='$imgslider',program_pengguna_id='$user_id',program_author='$user_nama',program_slug='$slug' where program_id='$program_id'");
		return $hsl;
	}
	function hapus_program($kode){
		$hsl=$this->db->query("delete from tbl_program where program_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_program_slider(){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program where program_img_slider='1' ORDER BY program_id DESC");
		return $hsl;
	}
	function get_program_home(){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program ORDER BY program_id DESC limit 4");
		return $hsl;
	}

	function program_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program ORDER BY program_id DESC limit $offset,$limit");
		return $hsl;
	}

	function program(){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program ORDER BY program_id DESC");
		return $hsl;
	}
	function get_prograrm_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program where program_id='$kode'");
		return $hsl;
	}

	function cari_program($keyword){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program WHERE program_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_program_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_program_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
