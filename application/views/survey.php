<!DOCTYPE html>
<html>

<head>
  <?php
  $profil = getProfil();
  ?>
  <script language="JavaScript">
    var txt = "Survei Kepuasan Pelanggan | Web Resmi <?= $profil->nama_puskesmas ?>  ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
      document.title = txt;
      txt = txt.substring(1, txt.length) + txt.charAt(0);
      segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
  </script>
  <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/kab_bangka.png' ?>">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
  <!-- Simple Line Font -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
  <!-- javascript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'theme/images/logo_kab.bangka.png' ?>">
</head>

<body>
  <div id="fh5co-page">
    <?php
    $this->load->view('template/atas');
    ?>
    <!--end atas-->
    <!--menu bar-->
    <?php
    $this->load->view('template/header');
    ?>
  </div>


  <div class="container">
    <div class="row">
      <div class="header">
        <h1>Survei Penilaian Kepuasan Masyarakat</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <center>
          <a href="<?php echo base_url() . 'survey' ?>" class="btn btn-success">Survey</a>
          <a href="<?php echo base_url('survey/result'); ?>" class="btn btn-info">Hasil</a>
        </center>
        <br />
      </div>
    </div>

    <!--content is here :)-->
    <?php echo $content; ?>

    <hr />

  </div>
  <?php
  $this->load->view('template/footer');
  ?>


</body>

</html>