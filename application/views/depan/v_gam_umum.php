<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script language="JavaScript">
    var txt = "Gambaran Umum | Web Resmi Puskesmas Sungailiat ";
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
<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
</noscript></div>

<!--Kode untuk mencegah seleksi teks, block teks dll.-->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;

}
</style>
<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
</style>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
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
            <h3>LUAS WILAYAH KERJA PUSKESMAS BAKAM</h3>
            <p class="justify">Wilayah Kerja Puskesmas Bakam terletak di Pulau Bangka dengan luas kurang lebih  594 Km².
                   
                </p>
                 <p class="justify">Secara administratif wilayah kerja Puskesmas Bakam berbatasan langsung dengan Wilayah kerja Puskesmas Puding Besar. Dan Rumah Sakit Sjafrie Rahman.
                   
                </p>
                <p class="justify">Jarak dari Puskesmas Ke Sungailiat sebagai Ibu Kota Kabupaten 38 Km.
                   
                </p>
                <h3>Adapun jarak tempuh dari ibu Kota Kecamatan ke Desa-Desa di wilayah kerja Puskesmas Bakam Sebagai berikut :</h3> 
              
             <img src="<?php echo base_url().'theme/images/gam1.png'?>" class="img-fluid" alt="#">

              <h3>Jumlah Kecamatan, Desa/ Kelurahan, Jumlah penduduk, Kepadatan Penduduk :</h3> 

               <p class="justify">Pada tahun 2019 ada 9 Desa  di Kecamatan Bakam.
                <br>Penduduk Kecamatan Bakam  tahun 2019 berjumlah 18.228 jiwa.
                <br>Desa yang paling banyak penduduk nya adalah Desa Bukit Layang dengan jumlah penduduk 3.762 jiwa.
                <br>Sedangkan paling sedikit adalah Desa Maras Senang  dengan jumlah penduduk 817  jiwa.
                   
                </p>

                 <h3>Jenis dan Jumlah Sarana Pelayanan Kesehatan menurut Kepemilikan / Pengelola :</h3> 
                  <p class="justify">Puskesmas (1 unit) yang merupakan Puskesmas Rawat Inap dan Poned berada di Desa Bakam sebagai Ibu Kota Kecamatan,
                <br>Puskesmas Pembantu/Pustu (4 unit) yang berada di Desa Dalil, Neknang, Maras Senang dan Bukit Layang,
                <br>Poskesdes (12 unit) berada di seluruh Desa se -Kecamatan Bakam,
                <br>Posyandu ada 21 tempat diseluruh Kecamatan Bakam Kabupaten Bangka.
                   
                </p>
            
            <div class="col-md-7">
               
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
