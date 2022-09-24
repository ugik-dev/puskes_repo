<!--Counter Inbox-->
<?php
// $query = $this->db->query("SELECT * FROM `data` WHERE inbox_status='1'");
// $jum_pesan = $query->num_rows();
// $query1 = $this->db->query("SELECT DISTINCT title,id FROM tbl_countries ORDER BY title");
// $jum_komentar = $query1->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATA SURVEY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'theme/images/logo_kab.bangka.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/font-awesome/css/font-awesome.min.css' ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/datatables/dataTables.bootstrap.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets_old/plugins/toast/jquery.toast.min.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/jquery-ui/jquery-ui.min.css'); ?>" />
  <script src="<?php echo base_url('assets2/jquery.min.js'); ?>"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    $this->load->view('admin/v_header');
    ?>
    <!--Menu-->
    <?php
    $this->load->view('admin/v_menu');
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Survey
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Survey</a></li>
          <li class="active">Data Survey</li>
        </ol>
      </section>

      <hr />
      <b><?php
          // echo $ket; 
          ?></b><br /><br />
      <!-- Main content -->
      <section class="content">
        <div class="col-lg-12">

          <form method="get" action="">
            <div class="row">

              <div class="col-lg-3" id="form-tahun">

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tahub</label>
                  <div class="col-sm-10">
                    <select name="tahun">
                      <option value="" class="form-control-plaintext">Pilih</option>
                      <?php
                      foreach ($option_tahun as $data) { // Ambil data tahun dari model yang dikirim dari controller                   
                        echo '<option value="' . $data['tahun'] . '">' . $data['tahun'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <!-- <br /><br /> -->
              </div>
              <div class="col-lg-1">

                <button type="submit">Tampilkan</button>
              </div>
            </div>
            <!-- <a href="<?php echo base_url('admin/survei'); ?>">Reset Filter</a> -->
          </form>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal Survey</th>
                        <th>Respon</th>
                        <th>Identitas Respon </th>
                        <th>Kontak Respon </th>
                        <th>Kritik dan Saran</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $no = 0;
                      foreach ($transaksi as $i) :

                        $no++;
                        $id = $i['id'];
                        $respon = $i['respon'];
                        $tanggal = $i['tanggal'];

                        if ($respon == '1') {
                          $keterangan = "<span class='success'>Sangat Puas</span>";
                        } elseif ($respon == '2') {
                          $keterangan = "Cukup";
                        } else {
                          $keterangan = "Tidak Puas";
                        }
                      ?>
                        <tr>
                          <td><?php
                              echo $no;
                              ?></td>
                          <td><?php
                              echo tgl_indo(explode(' ', $tanggal)[0]);
                              ?></td>
                          <td><?= $keterangan; ?></td>
                          <td><?= $i['nama'] . '<br>' . $i['alamat'] ?></td>
                          <td><?= $i['no_hp'] . ' / ' . $i['email'] ?></td>
                          <td><?= $i['alasan'] ?></td>
                        </tr>
                      <?php
                      endforeach;
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    // $this->load->view('template/footer_admin');
    ?>

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->




  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets_old/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets_old/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() . 'assets_old/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets_old/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets_old/plugins/toast/jquery.toast.min.js' ?>"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <script src="<?php echo base_url('assets2/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
  <script>
    $(document).ready(function() { // Ketika halaman selesai di load        
      $('.input-tanggal').datepicker({
        dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd       
      });
      $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya       
      $('#filter').change(function() { // Ketika user memilih filter            
        if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)               
          $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun       
          $('#form-tanggal').show(); // Tampilkan form tanggal           
        } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)               
          $('#form-tanggal').hide(); // Sembunyikan form tanggal              
          $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun           
        } else { // Jika filternya 3 (per tahun)              
          $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan         
          $('#form-tahun').show(); // Tampilkan form tahun         
        }
        $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun      
      })
    })
  </script>

</body>

</html>