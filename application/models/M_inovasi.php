<?php 
class M_inovasi extends CI_Model{

	function get_all_inovasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_inovasi");
		return $hsl;
	}

	function simpan_inovasi($judul,$deskripsi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_inovasi (inovasi_judul,inovasi_deskripsi,inovasi_photo) VALUES ('$judul','$inovasi','$photo')");
		return $hsl;
	}
	function simpan_inovasi_tanpa_img($judul,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_inovasi (inovasi_judul,inovasi_deskripsi) VALUES ('$judul','$deskripsi')");
		return $hsl;
	}

	function update_pegawai($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$hsl=$this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_mapel='$mapel',pegawai_photo='$photo' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function update_pegawai_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$hsl=$this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_mapel='$mapel' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function hapus_inovasi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_inovasi WHERE inovasi_id='$kode'");
		return $hsl;
	}

	//front-end
	function inovasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_inovasi");
		return $hsl;
	}
	function pegawai_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pegawai limit $offset,$limit");
		return $hsl;
	}

}