<?php
class M_pegawai extends CI_Model
{

	function get_all_pegawai()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_pegawai");
		return $hsl;
	}

	function simpan_pegawai($nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $mapel, $photo)
	{
		$hsl = $this->db->query("INSERT INTO tbl_pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_tmp_lahir,pegawai_tgl_lahir,pegawai_mapel,pegawai_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$photo')");
		return $hsl;
	}
	function simpan_pegawai_tanpa_img($nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $mapel)
	{
		$hsl = $this->db->query("INSERT INTO tbl_pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_tmp_lahir,pegawai_tgl_lahir,pegawai_mapel) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
		return $hsl;
	}

	function update_pegawai($kode, $nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $mapel, $photo)
	{
		$hsl = $this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_mapel='$mapel',pegawai_photo='$photo' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function update_pegawai_tanpa_img($kode, $nip, $nama, $jenkel, $tmp_lahir, $tgl_lahir, $mapel)
	{
		$hsl = $this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_mapel='$mapel' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function hapus_pegawai($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_pegawai WHERE pegawai_id='$kode'");
		return $hsl;
	}

	//front-end
	function pegawai()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_pegawai");
		return $hsl;
	}
	function pegawai_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_pegawai limit $offset,$limit");
		return $hsl;
	}
}
