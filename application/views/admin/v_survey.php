<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_komentar=$query1->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATA SURVEY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/logo_kab.bangka.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_old/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_old/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_old/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_old/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_old/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_old/plugins/toast/jquery.toast.min.css'?>"/>
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
       <form method="get" action="">        
       <label>Filter Berdasarkan</label><br>       
       <select name="filter" id="filter">           
       <option value="">Pilih</option>          
       <option value="1">Per Tanggal</option>     
       <option value="2">Per Bulan</option>         
       <option value="3">Per Tahun</option>      
       </select>        
       <br/><br/> 
       
       <div id="form-tanggal">           
       <label>Tanggal</label><br>          
       <input type="text" name="tanggal" class="input-tanggal" />            
       <br/><br/>       
       </div>  
       
       <div id="form-bulan">        
       <label>Bulan</label><br>        
       <select name="bulan">            
       <option value="">Pilih</option>     
       <option value="1">Januari</option>     
       <option value="2">Februari</option>      
       <option value="3">Maret</option>                
       <option value="4">April</option>    
       <option value="5">Mei</option>               
       <option value="6">Juni</option>              
       <option value="7">Juli</option>               
       <option value="8">Agustus</option>             
       <option value="9">September</option>            
       <option value="10">Oktober</option>              
       <option value="11">November</option>             
       <option value="12">Desember</option>            
       </select>            
       <br/><br/>        
       </div>    
       
                  <div id="form-tahun">
                  <label>Tahun</label><br>        
                  <select name="tahun">            
                  <option value="">Pilih</option>         
                  <?php              
                  foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller                   
                  echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';        
                  }              
                  ?>           
                  </select>     
                  <br/><br/>   
                  </div>
           
       <button type="submit">Tampilkan</button>       
       <a href="<?php echo base_url('admin/survei'); ?>">Reset Filter</a>   
       </form>    <hr/>
        <b><?php echo $ket; ?></b><br /><br />
    <!-- Main content -->
    <section class="content">
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
                   
                </tr>
                </thead>
                <tbody>
				<?php 
	function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}   $no=0;
                    foreach ($transaksi->result_array() as $i) :
                        
                        $no++;
                       $id=$i['id'];
                       $respon=$i['respon'];                      
                       $tanggal=$i['tanggal'];
                       
                        if ($respon=='1'){
                        $keterangan= "Senang";
                     } elseif ($respon=='2')  {
                        $keterangan= "Cukup";
                     }  else {
                        $keterangan= "Kurang ";
                     }
                    ?>
                <tr>
                   <td><?php echo $no;?></td>
                  <td><?php echo tgl_indo($tanggal);?></td>
                  <td><?php echo $keterangan;?></td>
                </tr>
				<?php endforeach;?>
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
    $this->load->view('template/footer_admin');
  ?>
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets_old/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets_old/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets_old/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets_old/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets_old/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets_old/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets_old/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets_old/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets_old/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
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
    $(document).ready(function(){ // Ketika halaman selesai di load        
    $('.input-tanggal').datepicker({            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd       
    });        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya       
    $('#filter').change(function(){ // Ketika user memilih filter            
    if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)               
    $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun       
    $('#form-tanggal').show(); // Tampilkan form tanggal           
    }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)               
    $('#form-tanggal').hide(); // Sembunyikan form tanggal              
    $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun           
    }else{ // Jika filternya 3 (per tahun)              
    $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan         
    $('#form-tahun').show(); // Tampilkan form tahun         
    }            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun      
    })    })    </script>

</body>
</html>
