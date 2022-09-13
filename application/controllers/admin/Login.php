<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        // $d = getProfil();
        // echo json_encode($d);
        // die();
        //posisi folder untuk menyimpan gambar captcha
        // $path = './assets/captcha/';

        //membuat folder apabila folder captcha tidak ada
        // if (!file_exists($path)) {
        //     $create = mkdir($path, 0777);
        //     if (!$create)
        //         return;
        // }
        //Menampilkan huruf acak untuk dijadikan captcha
        // $word = array_merge(range('0', '9'), range('A', 'Z'));
        // $acak = shuffle($word);
        // $str  = substr(implode($word), 0, 5);
        // //Menyimpan huruf acak tersebut kedalam session
        // $data_ses = array('captcha_str' => $str);
        // $this->session->set_userdata($data_ses);
        // //array untuk menampilkan gambar captcha
        // $vals = array(
        //     'word'  => $str, //huruf acak yang telah dibuat diatas
        //     'img_path'  => $path, //path untuk menyimpan gambar captcha
        //     'img_url'   => base_url() . 'assets/captcha/', //url untuk menampilkan gambar captcha
        //     'img_width' => '150', //lebar gambar captcha
        //     'img_height' => 40, //tinggi gambar captcha
        //     'expiration' => 7200 //expired time per captcha
        // );
        // $cap = create_captcha($vals);
        // $data['captcha_image'] = $cap['image']; //variable array untuk menampilkan captcha pada view
        // echo  $data['captcha_image'];
        // die();
        // $this->load->view('admin/v_login', $data); //load view
        $dataContent = array(
            'pageContent' => 'admin/v_login',
            // 'captcha_img' => $cap['image']
        );
        $this->load->view('template/main', $dataContent);
    }
    function auth()
    {
        //cek apakah secure code yang diinputkan oleh User sudah benar atau belum.
        // if ($this->input->post('input_captcha') != $this->session->userdata('captcha_str')) {
        //     echo '
        //         <script>
        //             alert("Huruf Captcha yang Anda masukkan tidak sama. Silahkan coba sekali lagi");
        //             window.location = "' . site_url() . 'administrator";
        //         </script>
        //     ';
        // } else {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $u = $username;
        $p = $password;
        $cadmin = $this->m_login->cekadmin($u, $p);

        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $u);
            $xcadmin = $cadmin->row_array();
            if ($xcadmin['pengguna_level'] == '1') {
                $this->session->set_userdata('akses', '1');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['pengguna_nama'];
                $this->session->set_userdata('idadmin', $idadmin);
                $this->session->set_userdata('nama', $user_nama);
                redirect('admin/dashboard');
            } else {
                $this->session->set_userdata('akses', '2');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['pengguna_nama'];
                $this->session->set_userdata('idadmin', $idadmin);
                $this->session->set_userdata('nama', $user_nama);
                header('admin/dashboard');
            }
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect('admin/login');
        }
        // }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
