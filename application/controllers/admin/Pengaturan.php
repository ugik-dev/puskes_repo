<?php
class Pengaturan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_pengaturan');
        $this->load->library('upload');
        $this->db->db_debug = false;
    }


    function index()
    {
        $x['data'] = $this->M_pengaturan->get_profil();
        $this->load->view('admin/v_ops_profil', $x);
    }

    function header()
    {
        $x['data'] = $this->M_pengaturan->get_header();
        $this->load->view('admin/v_ops_header', $x);
    }

    function delete_header()
    {
        $id = $this->input->post('id_header');
        $gmbr = $this->input->post('header_image');
        // echo $id;
        // die();
        // echo json_encode($this->input->post());
        // die();
        $path = base_url() . 'upload/images/' . $gmbr;
        delete_files($path);
        // die();
        $this->M_pengaturan->delete_header($id);
        redirect('admin/pengaturan/header');
    }

    function update_profil()
    {
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $data = $this->input->post();
        $this->upload->initialize($config);
        if (!empty($_FILES['logos']['name'])) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images';
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 300;
            $config['height'] = 100;
            $config['encrypt_name'] = TRUE;
            $config['new_image'] = './upload/images';
            $this->load->library('image_lib', $config);
            if ($this->upload->do_upload('logos')) {
                $gbr = $this->upload->data();
                $this->image_lib->resize();
                //Compress Image

                $data['logo'] = $gbr['file_name'];
                // echo $this->session->set_flashdata('msg', 'success');
                // redirect('admin/galeri');
            }
        }
        if (!empty($_FILES['kapus_imgs']['name'])) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images';
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 300;
            $config['height'] = 100;
            $config['encrypt_name'] = TRUE;
            $config['new_image'] = './upload/images';
            $this->load->library('image_lib', $config);
            if ($this->upload->do_upload('kapus_imgs')) {
                $gbr = $this->upload->data();
                $this->image_lib->resize();
                //Compress Image

                $data['kapus_img'] = $gbr['file_name'];
                // echo $this->session->set_flashdata('msg', 'success');
                // redirect('admin/galeri');
            }
        }
        // var_dump($data);

        // die();

        // $kategori = strip_tags($this->input->post('xkategori'));
        $this->M_pengaturan->update_profil($data);
        // echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/pengaturan');
    }

    function add_header()
    {
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $data = $this->input->post();
        $this->upload->initialize($config);
        if (!empty($_FILES['header_images']['name'])) {
            // echo 'ada gambar';
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images';
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            // $config['width'] = 300;
            // $config['height'] = 100;
            $config['encrypt_name'] = TRUE;
            $config['new_image'] = './upload/images';
            $this->load->library('image_lib', $config);
            if ($this->upload->do_upload('header_images')) {
                $gbr = $this->upload->data();
                $this->image_lib->resize();
                //Compress Image

                $data['header_image'] = $gbr['file_name'];
                // echo $this->session->set_flashdata('msg', 'success');
                // redirect('admin/galeri');
            }
        }
        // var_dump($data);

        // die();

        // $kategori = strip_tags($this->input->post('xkategori'));
        $this->M_pengaturan->add_header($data);
        // echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/pengaturan/header');
    }

    function update_header()
    {
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $data = $this->input->post();
        $this->upload->initialize($config);
        if (!empty($_FILES['header_images']['name'])) {
            // echo 'ada gambar';
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images';
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            // $config['width'] = 300;
            // $config['height'] = 100;
            $config['encrypt_name'] = TRUE;
            $config['new_image'] = './upload/images';
            $this->load->library('image_lib', $config);
            if ($this->upload->do_upload('header_images')) {
                $gbr = $this->upload->data();
                $this->image_lib->resize();
                //Compress Image

                $data['header_image'] = $gbr['file_name'];
                // echo $this->session->set_flashdata('msg', 'success');
                // redirect('admin/galeri');
            }
        }
        // var_dump($data);

        // die();

        // $kategori = strip_tags($this->input->post('xkategori'));
        $this->M_pengaturan->update_header($data);
        // echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/pengaturan/header');
    }
}
