<?php
class Loker extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_loker');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		
		$x['data']=$this->m_loker->get_all_loker();
		$this->load->view('admin/v_loker',$x);
	}

	function download(){
		$id=$this->uri->segment(4);
		$get_db=$this->m_loker->get_loker_byid($id);
		$q=$get_db->row_array();
		$loker=$q['loker_data'];
		$path='./assets/loker/'.$loker;
		$data =  file_get_contents($path);
		$name = $loker;

		force_download($name, $data); 
		redirect('admin/loker');
	}
	
	function simpan_loker(){
				$config['upload_path'] = './assets/loker/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $loker=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$oleh=strip_tags($this->input->post('xoleh'));
	
							$this->m_loker->simpan_loker($judul,$deskripsi,$oleh,$loker);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/loker');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/loker');
	                }
	                 
	            }else{
					redirect('admin/loker');
				}
				
	}
	
	function update_loker(){
				
	            $config['upload_path'] = './assets/loker/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$oleh=strip_tags($this->input->post('xoleh'));
							$data=$this->input->post('file');
							$path='./assets/loker/'.$data;
							unlink($path);
							$this->m_loker->update_file($kode,$judul,$deskripsi,$oleh,$file);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/loker');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/loker');
	                }
	                
	            }else{
						$kode=$this->input->post('kode');
	                    $judul=strip_tags($this->input->post('xjudul'));
						$deskripsi=$this->input->post('xdeskripsi');
						$oleh=strip_tags($this->input->post('xoleh'));
						$this->m_loker->update_loker_tanpa_loker($kode,$judul,$deskripsi,$oleh);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/loker');
	            } 

	}

	function hapus_loker(){
		$kode=$this->input->post('kode');
		$data=$this->input->post('file');
		$path='./assets/loker/'.$data;
		unlink($path);
		$this->m_loker->hapus_loker($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/loker');
	}

}