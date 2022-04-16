<?php
class Download extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_files');
		$this->load->helper('download');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['data'] = $this->m_files->get_all_files();
		$this->load->view('depan/v_download', $x);
	}

	function get_file($id)
	{
		// $id = $this->uri->segment(3);
		$this->db->query("UPDATE tbl_files SET file_download=file_download+1 WHERE file_id='$id'");
		$get_db = $this->m_files->get_file_byid($id);
		$q = $get_db->row_array();
		$file = $q['file_data'];
		$path = './upload/files/' . $file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
		redirect(base_url() . 'bank_data');
	}
}
