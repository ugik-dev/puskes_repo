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
		// $x['berita'] = $this->m_tulisan->get_berita_home();
		// $x['program'] = $this->m_program->get_program_home();
		// $x['pengumuman'] = $this->m_pengumuman->get_pengumuman_home();
		// $x['loker'] = $this->m_loker->get_loker_home();
		// $x['agenda'] = $this->m_agenda->get_agenda_home();
		// $x['tot_pegawai'] = $this->db->get('tbl_pegawai')->num_rows();
		$data['pengumuman'] = $this->M_general->get_pengumuman(array('limit' => 3));
		// echo json_encode($data);
		// die();
		$data['berita'] = $this->M_general->get_tulisan(array('limit' => 6, 'jenis' => 'berita'));
		$data['galeri'] = $this->M_general->get_galeri(array('limit' => 3));
		// $x['tot_files'] = $this->db->get('tbl_files')->num_rows();
		// $x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		// $this->load->view('depan/v_home', $x);
		$dataContent = array(
			'pageContent' => 'page/landing_page',
			'dataContent' => $data
		);
		$this->load->view('template/main', $dataContent);
	}
}
