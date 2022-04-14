<?php
class Satker extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_satker');
		$this->load->model('m_pengguna');
		
	}


	function index(){
		$x['data']=$this->m_satker->get_all_satker();
		$this->load->view('admin/v_satker',$x);
	}
	
	function simpan_satker(){
				$nama=strip_tags($this->input->post('xnama'));				
				$x = array(
				'xnama' => $nama			
				);
				$this->m_satker->simpan_satker($nama);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/satker');
				
	}
	
	function update_satker(){		
	                        $kode=$this->input->post('kode');							
							$nama=strip_tags($this->input->post('xnama'));
							$this->m_satker->update_satker($kode,$nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/satker');
	}

	function hapus_satker(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_satker->hapus_satker($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/satker');
	}

}