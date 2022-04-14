<?php
class Tulisan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_tulisan->get_all_tulisan();
		$this->load->view('admin/v_tulisan', $x);
	}

	function add_tulisan()
	{
		$x['kat'] = $this->m_kategori->get_all_kategori();
		$x['form_url'] = 'admin/tulisan/simpan_tulisan';

		$this->load->view('admin/v_add_tulisan', $x);
	}

	function get_edit($id)
	{
		$x['return_data'] = $this->m_tulisan->get_tulisan(array('tulisan_id' => $id, 'lengkap' => true))[0];
		$x['kat'] = $this->m_kategori->get_all_kategori();
		$x['form_url'] = 'admin/tulisan/update_tulisan';
		$this->load->view('admin/v_add_tulisan', $x);
	}
	function simpan_tulisan()
	{

		$data = $this->input->post();
		$data['tulisan_slug'] = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data['tulisan_judul'])));
		$kode = $this->session->userdata('idadmin');
		$user = $this->m_pengguna->get_pengguna_login($kode);
		$p = $user->row_array();
		$data['tulisan_pengguna_id']  = $p['pengguna_id'];
		$data['tulisan_author'] = $p['pengguna_nama'];

		$config['upload_path'] = './upload/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './upload/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 710;
				$config['height'] = 460;
				$config['new_image'] = './upload/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				if (!empty($gbr['file_name'])) {
					$data['tulisan_gambar'] = $gbr['file_name'];
				};
			}
		} else {
		}
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/tulisan');
		$this->m_tulisan->add($data);
	}

	function update_tulisan()
	{

		$data = $this->input->post();
		$data['tulisan_slug'] = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data['tulisan_judul'])));
		$kode = $this->session->userdata('idadmin');
		$user = $this->m_pengguna->get_pengguna_login($kode);
		$p = $user->row_array();
		$data['tulisan_pengguna_id']  = $p['pengguna_id'];
		$data['tulisan_author'] = $p['pengguna_nama'];

		$config['upload_path'] = './upload/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './upload/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 710;
				$config['height'] = 460;
				$config['new_image'] = './upload/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				if (!empty($gbr['file_name'])) {
					$data['tulisan_gambar'] = $gbr['file_name'];
				};
			}
		} else {
		}
		$this->m_tulisan->edit($data);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/tulisan');
	}

	function hapus_tulisan()
	{
		$data['tulisan_id'] = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './upload/images/' . $gambar;
		unlink($path);
		$this->m_tulisan->delete($data);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/tulisan');
	}
}
