<?php
class Contact extends CI_Controller{
  function __construct(){
    parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_pengunjung');
      $this->m_pengunjung->count_visitor();
  }
  function index(){
    //posisi folder untuk menyimpan gambar captcha
        $path = './assets/captcha/';
 
        //membuat folder apabila folder captcha tidak ada
        if ( !file_exists($path) )
        {
            $create = mkdir($path, 0777);
            if ( !$create)
            return;
        }
 
        //Menampilkan huruf acak untuk dijadikan captcha
        $word = array_merge(range('0', '9'), range('A', 'Z'));
        $acak = shuffle($word);
        $str  = substr(implode($word), 0, 5);
 
        //Menyimpan huruf acak tersebut kedalam session
        $data_ses = array('captcha_str' => $str  );
        $this->session->set_userdata($data_ses);
 
        //array untuk menampilkan gambar captcha
        $vals = array(
            'word'  => $str, //huruf acak yang telah dibuat diatas
            'img_path'  => $path, //path untuk menyimpan gambar captcha
            'img_url'   => base_url().'assets/captcha/', //url untuk menampilkan gambar captcha
            'img_width' => '150', //lebar gambar captcha
            'img_height' => 40, //tinggi gambar captcha
            'expiration' => 7200 //expired time per captcha
        );
 
        $cap = create_captcha($vals);
        $data['captcha_image'] = $cap['image']; //variable array untuk menampilkan captcha pada view
 
      $this->load->view('depan/v_contact',$data); //load view
  }

  function kirim_pesan(){
    //cek apakah secure code yang diinputkan oleh User sudah benar atau belum.
        if($this->input->post('input_captcha') != $this->session->userdata('captcha_str')){
            echo '
                <script>
                    alert("Huruf Captcha yang Anda masukkan tidak sama. Silahkan coba sekali lagi");
                    window.location = "'.site_url().'contact";
                </script>
            ';
        }else{
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
      redirect('contact');
        }
     
  }
}
