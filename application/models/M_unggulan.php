<?php
class M_unggulan extends CI_Model{

	function get_all_unggulan(){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan ORDER BY unggulan_id DESC");
		return $hsl;
	}
	function simpan_unggulan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_unggulan(unggulan_judul,unggulan_isi,unggulan_kategori_id,unggulan_kategori_nama,unggulan_img_slider,unggulan_pengguna_id,unggulan_author,unggulan_gambar,unggulan_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_unggulan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan where unggulan_id='$kode'");
		return $hsl;
	}
	function update_unggulan($unggulan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_unggulan set unggulan_judul='$judul',unggulan_isi='$isi',unggulan_kategori_id='$kategori_id',unggulan_kategori_nama='$kategori_nama',unggulan_img_slider='$imgslider',unggulan_pengguna_id='$user_id',unggulan_author='$user_nama',unggulan_gambar='$gambar',unggulan_slug='$slug' where unggulan_id='$unggulan_id'");
		return $hsl;
	}
	function update_unggulan_tanpa_img($unggulan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_unggulan set unggulan_judul='$judul',unggulan_isi='$isi',unggulan_kategori_id='$kategori_id',unggulan_kategori_nama='$kategori_nama',unggulan_img_slider='$imgslider',unggulan_pengguna_id='$user_id',unggulan_author='$user_nama',unggulan_slug='$slug' where unggulan_id='$unggulan_id'");
		return $hsl;
	}
	function hapus_unggulan($kode){
		$hsl=$this->db->query("delete from tbl_unggulan where unggulan_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_program_slider(){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan where unggulan_img_slider='1' ORDER BY unggulan_id DESC");
		return $hsl;
	}
	function get_program_home(){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan ORDER BY unggulan_id DESC limit 4");
		return $hsl;
	}

	function program_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan ORDER BY unggulan_id DESC limit $offset,$limit");
		return $hsl;
	}

	
	function get_prograrm_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan where unggulan_id='$kode'");
		return $hsl;
	}

	function cari_program($keyword){
		$hsl=$this->db->query("SELECT tbl_unggulan.*,DATE_FORMAT(unggulan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_unggulan WHERE unggulan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_program_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_unggulan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
