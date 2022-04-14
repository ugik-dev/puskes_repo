<?php
class Program extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
	
		$this->load->model('m_program');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_program->get_all_program();
		$this->load->view('admin/v_program',$x);
	}
	function add_program(){
		
		$this->load->view('admin/v_add_program');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_program->get_program_by_kode($kode);
		$this->load->view('admin/v_edit_program',$x);
	}
	function simpan_program(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$gbr['file_name'];
													$judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_program->simpan_program($judul,$isi,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/program');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/program');
	                }

	            }else{
					redirect('admin/program');
				}

	}

	function update_program(){

	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $program_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_program->update_program($program_id,$judul,$isi,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','info');
													redirect('admin/program');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/program');
	                }

	            }else{
									$program_id=$this->input->post('kode');
									$judul=strip_tags($this->input->post('xjudul'));
									$isi=$this->input->post('xisi');
									$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
									$trim     = trim($string);
									$slug     = strtolower(str_replace(" ", "-", $trim));
									
									//$imgslider=$this->input->post('ximgslider');
									$imgslider='0';
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_pengguna->get_pengguna_login($kode);
									$p=$user->row_array();
									$user_id=$p['pengguna_id'];
									$user_nama=$p['pengguna_nama'];
									$this->m_program->update_program_tanpa_img($program_id,$judul,$isi,$imgslider,$user_id,$user_nama,$slug);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/program');
	            }

	}

	function hapus_program(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_program->hapus_program($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/program');
	}

}
