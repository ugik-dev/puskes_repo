<?php
class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_general');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }

    function index($jenis)
    {
        // $data = $this->m_general->get_tulisan(array('lengkap' => true, 'kategori' => $kategori, 'slug' => $slug))[0];
        $filter = array('jenis' => $jenis, 'limit' => 4, 'tulisan_isi_c' => 450);
        $p = $this->input->get();
        if (empty($p['page'])) $filter['page'] = 1;
        else $filter['page']  = $p['page'];
        $data['link'] = strtolower($jenis);
        $data['tulisan'] = $this->m_general->get_tulisan($filter);
        $data['total_page'] = ceil($this->m_general->get_tulisan_page($filter) / 4);
        $data['page'] = $filter['page'];

        $dataContent = array(
            'pageContent' => 'page/tulisan_s',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }

    function search()
    {
        $p = $this->input->get();
        $key = $p['key'];
        $filter = array('key' => $key, 'limit' => 4, 'tulisan_isi_c' => 450);
        // echo json_encode($filter);
        // die();
        if (empty($p['page'])) $filter['page'] = 1;
        else $filter['page']  = $p['page'];
        $data['link'] = 'search';
        $data['key'] = $key;
        $data['tulisan'] = $this->m_general->get_tulisan($filter);
        $data['total_page'] = ceil($this->m_general->get_tulisan_page($filter) / 4);
        $data['page'] = $filter['page'];

        $dataContent = array(
            'pageContent' => 'page/tulisan_s2',
            'dataContent' => $data
        );
        $this->load->view('template/main', $dataContent);
    }

    function detail($jenis, $slug)
    {
        $filter = array('jenis' => $jenis, 'tulisan_slug' => $slug, 'lengkap' => true);
        $data = $this->m_general->get_tulisan($filter)[0];
        $data['komentar'] = $this->m_general->get_komentar(array('komentar_tulisan_id' => $data['tulisan_id']));
        $kode = $data['tulisan_id'];
        // echo $kode;
        // die();
        $this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");

        $dataContent = array(
            'pageContent' => 'page/open_berita',
            'dataContent' => $data,

        );
        $this->load->view('template/main', $dataContent);
    }

    function komentar()
    {
        $data = $this->input->post();
        $nama = htmlspecialchars($data['nama'], ENT_QUOTES);
        $email = htmlspecialchars($data['email'], ENT_QUOTES);
        $id = htmlspecialchars($data['id'], ENT_QUOTES);
        $slug = htmlspecialchars($data['slug'], ENT_QUOTES);
        $jenis = htmlspecialchars(strtolower($data['jenis']), ENT_QUOTES);
        $komentar = nl2br(htmlspecialchars($data['komentar'], ENT_QUOTES));

        $data = array(
            'komentar_nama'             => $nama,
            'komentar_email'             => $email,
            'komentar_isi'                 => $komentar,
            'komentar_status'         => 0,
            'komentar_tulisan_id' => $id
        );

        $this->db->insert('tbl_komentar', $data);
        // echo json_encode(array('response' => 'success'));

        $this->session->set_flashdata('msg', '<div class="alert alert-info">Komentar Anda akan tampil setelah moderasi.</div>');
        redirect($jenis . '/' . $slug . '#komentar');
    }
}
