<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_tulisan');
		// $this->load->model('m_galeri');
		// $this->load->model('m_pengumuman');
		// $this->load->model('m_agenda');
		// $this->load->model('m_files');
		$this->load->model('m_pengunjung');
		// $this->load->model('m_program');
		$this->load->model(array('M_general'));
		$this->m_pengunjung->count_visitor();
		$this->db->db_debug = FALSE;
	}

	function index()
	{
		$data['pengumuman'] = $this->M_general->get_tulisan(array('limit' => 6, 'jenis' => 'Pengumuman'));
		$data['berita'] = $this->M_general->get_tulisan(array('limit' => 6, 'jenis' => 'Berita'));
		$data['galeri'] = $this->M_general->get_galeri(array('limit' => 3));
		$dataContent = array(
			'pageContent' => 'page/landing_page',
			'dataContent' => $data
		);
		$this->load->view('template/main', $dataContent);
	}
}
