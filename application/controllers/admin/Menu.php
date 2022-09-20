<?php
class Menu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_menu');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->db->db_debug = FALSE;
	}


	function index()
	{
		$x['data'] = $this->m_menu->get_menu();
		$this->load->view('admin/v_ops_menu', $x);
	}
	function add_menu()
	{
		// $x['kat'] = $this->m_kategori->get_all_kategori();
		$x['form_url'] = 'admin/menu/simpan_menu';
		$this->load->view('admin/v_add_menu', $x);
	}
	function get_edit($id)
	{
		// $kode = $this->uri->segment(4);
		$x['return_data'] = $this->m_menu->get_menu(array('id_menu' => $id, 'lengkap' => true))[0];
		$x['form_url'] = 'admin/menu/update_menu';
		$this->load->view('admin/v_add_menu', $x);
	}
	function simpan_menu()
	{

		$data = $this->input->post();
		$data['slug'] = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data['nama_menu'])));
		$this->m_menu->add($data);
		redirect('admin/menu');
	}

	function update_menu()
	{
		$data = $this->input->post();
		$data['slug'] = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data['nama_menu'])));
		$this->m_menu->edit($data);
		redirect('admin/menu');
	}

	function hapus_menu()
	{
		$kode = $this->input->post('kode');
		// var_dump($kode);
		$this->m_menu->delete(['id_menu' => $kode]);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/menu');
	}
}
