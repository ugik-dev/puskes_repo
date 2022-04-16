<?php
class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_pengunjung');
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
}
