<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script language="JavaScript">
    var txt = "Tarif Layanan | Web Resmi Puskesmas Sungailiat ";
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
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
               <center><h2>Tarif Layanan & Perbup No. 98 Th 2019</h2></center>
                <center> <img src="<?php echo base_url().'theme/images/TARIF PELAYANAN PUSKESMAS SUNGAILIAT-1.jpg'?>" class="img-fluid" alt="#"></center>
                <center> <img src="<?php echo base_url().'theme/images/TARIF PELAYANAN PUSKESMAS SUNGAILIAT-2.jpg'?>" class="img-fluid" alt="#"></center>
              
                </div>
            <div class="col-md-3">
                
               
             1. <a href="<?php echo base_url().'tarif_layanan/lakukan_download' ?>"><font face="Courier New" color="blue" size="3">Download Tarif Layanan</font></a><br>
             2. <a href="<?php echo base_url().'tarif_layanan/download_perbup' ?>"><font face="Courier New" color="blue" size="3">Download Salinan Perbup No. 98 Tahun 2019 ttg Tarif Layanan Pada Badan Layanan Umum Daerah Pusat Kesehatan Masyarakat Kabupaten Bangka</font></a><br>
              
               
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
