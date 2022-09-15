<?php
class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_menu', 'm_pengunjung', 'm_pegawai'));
        $this->load->model('');
        $this->m_pengunjung->count_visitor();
    }
    function index($kategori, $slug)
    {
        $data = $this->m_menu->get_menu(array('lengkap' => true, 'kategori' => $kategori, 'slug' => $slug))[0];
        $dataContent = array(
            'pageContent' => 'page/open_menu',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }

    function pegawai()
    {
        $data = $this->m_menu->get_pegawai();
        $dataContent = array(
            'pageContent' => 'page/pg_pegawai',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }

    function bank_data()
    {
        $data = $this->m_menu->get_bank_data();
        $dataContent = array(
            'pageContent' => 'page/pg_bank_data',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }

    function esurvey()
    {
        $data = $this->m_menu->get_bank_data();
        $dataContent = array(
            'pageContent' => 'page/pg_survey',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }
    function galeri()
    {
        $data = $this->m_menu->get_galeri();
        $dataContent = array(
            'pageContent' => 'page/pg_galeri',
            'dataContent' => $data
        );
        // echo json_encode($data);
        $this->load->view('template/main', $dataContent);
    }

    function submit_survey()
    {

        $data = $this->input->post();
        $data['ip_address'] = $this->input->ip_address();
        $this->load->model('GeneralModel');
        $this->GeneralModel->submit_survey($data);
        echo json_encode(array('error' => false, 'data' => $data));
    }
}
