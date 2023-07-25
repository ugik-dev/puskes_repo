<!--Counter Inbox-->
<?php

$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
$profil = getProfil();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script language="JavaScript">
    var txt = "Add Post Artikel | <?= $profil->nama_puskesmas ?>  ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
      document.title = txt;
      txt = txt.substring(1, txt.length) + txt.charAt(0);
      segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
  </script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'upload/images/kab_bangka.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/font-awesome/css/font-awesome.min.css' ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/datepicker/datepicker3.css' ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/select2/select2.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    $this->load->view('admin/v_header');
    ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $this->load->view('admin/v_menu');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Menu
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Menu</a></li>
          <li class="active">Add Menu</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Postingan</h3>
          </div>

          <form action="<?php echo base_url() . $form_url ?>" method="post" enctype="multipart/form-data">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-10">
                  <input type="hidden" name="tulisan_id" value="<?= !empty($return_data) ? $return_data['tulisan_id'] : ''; ?>" />
                  <input type="text" name="tulisan_judul" class="form-control" placeholder="Nama Menu" value="<?= !empty($return_data) ? $return_data['tulisan_judul'] : ''; ?>" required />
                </div>
                <!-- /.col -->
                <div class="col-md-2">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->

            </div>
        </div>
        <!-- /.box -->

        <div class="row">
          <div class="col-md-8">

            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Menu</h3>
              </div>
              <div class="box-body">

                <textarea id="ckeditor" name="tulisan_isi" rows="5"><?= !empty($return_data) ? $return_data['tulisan_isi'] : ''; ?></textarea>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>
          <!-- /.col (left) -->
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Pengaturan Lainnya</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal Postings</label>
                  <input type="date" name="tulisan_tanggal" class="form-control" value="<?= !empty($return_data) ? $return_data['tulisan_tanggal'] : ''; ?>" required />
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control select2" name="tulisan_jenis" id="tulisan_jenis" style="width: 100%;" required>
                    <option value="">-Pilih-</option>

                    <?php if (!empty($return_data)) {
                      if ($return_data['tulisan_jenis'] == 'Berita')
                        echo ' <option value="Berita" selected>Berita</option> ';
                      else
                        echo ' <option value="Berita">Berita</option> ';

                      if ($return_data['tulisan_jenis'] == 'Pengumuman')
                        echo ' <option value="Pengumuman" selected>Pengumuman</option> ';
                      else
                        echo ' <option value="Pengumuman">Pengumuman</option> ';

                      if ($return_data['tulisan_jenis'] == 'Agenda')
                        echo ' <option value="Agenda" selected>Agenda</option> ';
                      else
                        echo ' <option value="Agenda">Agenda</option> ';

                      if ($return_data['tulisan_jenis'] == 'Lowongan Pekerjaan')
                        echo ' <option value="Lowongan Pekerjaan" selected>Lowongan Pekerjaan</option> ';
                      else
                        echo ' <option value="Lowongan Pekerjaan">Lowongan Pekerjaan</option> ';
                    } else {
                      echo '<option value="Berita">Berita</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Agenda">Agenda</option>
                    <option value="loker">Lowongan Pekerjaan</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gambar</label>
                  <?php if (!empty($return_data)) {
                    echo ' <img src="' . base_url('upload/images/' . $return_data['tulisan_gambar']) . '" style="width: 100%;"> <small>*jika tidak diganti biarkkan saja </small>';
                    echo ' <input type="file" name="filefoto" style="width: 100%;"> ';
                  } else {
                    echo ' <input type="file" name="filefoto" style="width: 100%;" required> ';
                  }
                  ?>


                </div>
                <!-- <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" name="status" id="status" style="width: 100%;" required>
                    <option value="1">Aktif</option>
                    <option value="2">Non Aktif</option>
                  </select>
                </div> -->
                <!-- /.form group -->
                <div class="form-group">

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              </form>

              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!--Footer-->
    <?php
    $this->load->view('admin/v_footer');
    ?>


    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/balloon/ckeditor.js"></script> -->
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets_old/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/select2/select2.full.min.js' ?>"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.extensions.js' ?>"></script>
  <!-- date-range-picker -->
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>

  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets_old/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script>
  <!-- <script src="<?php echo base_url() . 'assets/ckeditor5/ckeditor.js' ?>"></script> -->
  <script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

  <script src="<?php echo base_url() . 'assets/ckfinder/ckfinder.js' ?>"></script>
  <script>
    $(function() {
      <?php if (!empty($return_data)) { ?>
        // document.getElementById("kategori").value
        $('#kategori').val('<?= $return_data['kategori'] ?>').change()
        $('#status').val('<?= $return_data['status'] ?>').change()
      <?php } ?>
      var editor = CKEDITOR.replace('ckeditor');
      CKFinder.setupCKEditor(editor);

    });
  </script>

</body>

</html>