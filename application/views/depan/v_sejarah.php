<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script language="JavaScript">
    var txt = "Sejarah | Web Resmi Puskesmas Bakam ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
        document.title = txt;
        txt = txt.substring(1, txt.length) + txt.charAt(0);
        segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
</script>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/kab_bangka.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
     <?php
    $this->load->view('template/atas');
  ?>
   <!--end atas-->
  <!--menu bar-->
     <?php
    $this->load->view('template/header');
  ?>
  <!--end bar-->
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
</style>
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Sejarah</h2>
                <p class="justify">Berdiri / diresmikan Puskesmas Bakam pada tanggal 01 Maret 1994 (01-03-1994) diatas tanah wakaf dari penduduk Desa Bakam seluas 4.092 Meter persegi (m²) yang hanya memberikan pelayanan Rawat Jalan Tingkat Pertama (RJTP ).
                </p>
                <p class="justify">Puskesmas Bakam dengan kode Puskesmas : P1901092101 yang beralamatkan di Jalan Raya Pangkalpinang-Mentok Km. 38 Desa Bakam Kecamatan Bakam.
                </p>
                 <p class="justify">Tahun 2006 Puskesmas Bakam berkembang menjadi Puskesmas Perawatan /  Rawat Inap Tingkat Pertama (RITP) dengan kapasitas 10 (sepuluh) tempat tidur yang melayani pasien JKSS, Askes PNS, Askeskin / Jamkesmas dan pasien umum baik yang berasal dari Kecamatan maupun luar Kecamatan Bakam.
                </p>
                <p class="justify">Tahun 2013 berdiri bangunan Poned (Pelayanan Obtetri Neonatal Emergensi Dasar) dan baru beroperasi secara resmi pada tanggal 24 Februari 2014 yang melayani semua pasien dari kecamatan maupun luar Kecamatan Bakam.

                </p>
                 <p class="justify">Pada tanggal 05 Oktober 2014 ( 05-10-2014) Puskesmas Bakam memperluas tanah untuk pembangunan Panti Pemulihan Gizi / Therapeutik Fending Center ( TFC) maupun bangunan lainnya melalui proses ganti rugi lahan seluas 2.107 Meter Persegi (m²) milik Bapak Asrin Desa Bakam Kecamatan Bakam melalui  Dinas Kesehatan Kabupaten Bangka.

                </p>
                 <p class="justify">Dan tahun 2014 di bangun Panti Pemulihan Gizi / Therapeutik Fending Center (TFC) dan mulai beroperasi tahun 2013 yang melayani perawatan Balita gizi buruk baik dari Kecamatan maupun luar Kecamatan Bakam.

                </p>
                
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url().'theme/images/bakam_sejarah1.png'?>" class="img-fluid" alt="#">
                    <img src="<?php echo base_url().'theme/images/bakam_sejarah2.png'?>" class="img-fluid" alt="#">
                   

                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
   
   

       <!--============================= FOOTER =============================-->
<?php
    $this->load->view('template/footer');
  ?>

        <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
