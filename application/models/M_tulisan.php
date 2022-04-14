<?php
class M_tulisan extends CI_Model
{

	function get_tulisan($filter = [])
	{
		if (!empty($filter['lengkap']))
			$this->db->select('*');
		else
			$this->db->select('tulisan_id,tulisan_isi, tulisan_judul, tulisan_tanggal');

		if (!empty($filter['tulisan_id'])) $this->db->where('tulisan_id', $filter['tulisan_id']);
		if (!empty($filter['tulisan_jenis'])) $this->db->where('tulisan_jenis', $filter['tulisan_jenis']);
		if (!empty($filter['tulisan_slug'])) $this->db->where('slug', $filter['tulisan_slug']);

		$this->db->from('tbl_tulisan');
		$query = $this->db->get();
		$obj_res =  $query->result_array();
		return $obj_res;
	}

	function get_all_tulisan()
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_tanggal DESC");
		return $hsl;
	}

	function get_tulisan_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	public function add($data)
	{
		$this->db->insert('tbl_tulisan', DataStructure::slice($data, ['tulisan_judul', 'tulisan_pengguna_id', 'tulisan_author', 'tulisan_jenis', 'tulisan_tanggal', 'tulisan_isi', 'tulisan_slug', 'tulisan_tanggal', 'tulisan_gambar']));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah Bank gagal", "kode_bank");
		return $this->db->insert_id();
	}

	public function edit($data)
	{
		$this->db->where('tulisan_id', $data['tulisan_id']);
		$this->db->update('tbl_tulisan', DataStructure::slice($data, ['tulisan_judul', 'tulisan_pengguna_id', 'tulisan_author', 'tulisan_jenis', 'tulisan_tanggal', 'tulisan_isi', 'tulisan_slug', 'tulisan_tanggal', 'tulisan_gambar'], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Edit Bank gagal", "kode_bank");

		return $data['tulisan_id'];
	}

	public function delete($data)
	{
		$this->db->where('tulisan_id', $data['tulisan_id']);
		$this->db->delete('tbl_tulisan');

		ExceptionHandler::handleDBError($this->db->error(), "Gagal Hapus Menu", "menu");
	}
	//Front-End
	function get_berita_slider()
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_img_slider='1' ORDER BY tulisan_tanggal DESC");
		return $hsl;
	}
	function get_berita_home()
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_tanggal DESC limit 4");
		return $hsl;
	}

	function berita_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_tanggal DESC limit $offset,$limit");
		return $hsl;
	}

	function berita()
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_tanggal DESC");
		return $hsl;
	}
	function get_berita_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function cari_berita($keyword)
	{
		$hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_tulisan_id($kode)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}
}
