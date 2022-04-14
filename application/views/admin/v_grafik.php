<!--Counter Inbox-->
   
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> GRAFIK SURVEY</title>
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
  <!-- Left side column. contains the logo and sidebar -->
 <?php
    $this->load->view('admin/v_menu');
  ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik Data Survey
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
       <a href="<?php echo base_url('admin/grafik'); ?>">Reset Filter</a>   
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
                 
					<th>Sangat Puas</th>
                    <th>Cukup Puas</th>
                    <th>Tidak Puas</th>
                </tr>
                </thead>
                <tbody>
			 <?php   
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan       
    $filter = $_GET['filter']; // Ambil data filder yang dipilih user       
    if($filter == '1'){ // Jika filter nya 1 (per tanggal)          
    $tgl = date('d-m-y', strtotime($_GET['tanggal']));            
    echo '<b>Data Transaksi Tanggal '.$tgl.'</b><br /><br />';          
               
   // $query = "SELECT * FROM transaksi WHERE DATE(tgl)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter 
    $query=$this->db->query("SELECT * FROM data WHERE respon = '1' AND DATE(tanggal)='".$_GET['tanggal']."'");
    $sangat_puas=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM data WHERE respon = '2' AND DATE(tanggal)='".$_GET['tanggal']."'");
    $cukup_puas=$query1->num_rows();
    $query2=$this->db->query("SELECT * FROM data WHERE respon = '3' AND DATE(tanggal)='".$_GET['tanggal']."'");
    $tidak_puas=$query2->num_rows();
    }else if($filter == '2'){ // Jika filter nya 2 (per bulan)          
    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');          
    echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />'; 
               
    //$query = "SELECT * FROM transaksi WHERE MONTH(tgl)='".$_GET['bulan']."' AND YEAR(tgl)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter        
    $query=$this->db->query("SELECT * FROM data WHERE respon = '1' AND MONTH(tanggal)='".$_GET['bulan']."' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $sangat_puas=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM data WHERE respon = '2' AND MONTH(tanggal)='".$_GET['bulan']."' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $cukup_puas=$query1->num_rows();
    $query2=$this->db->query("SELECT * FROM data WHERE respon = '3' AND MONTH(tanggal)='".$_GET['bulan']."' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $tidak_puas=$query2->num_rows();
        
    }else{ // Jika filter nya 3 (per tahun)       
    echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';           
         
    //$query = "SELECT * FROM transaksi WHERE YEAR(tgl)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter  
    $query=$this->db->query("SELECT * FROM data WHERE respon = '1' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $sangat_puas=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM data WHERE respon = '2' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $cukup_puas=$query1->num_rows();
    $query2=$this->db->query("SELECT * FROM data WHERE respon = '3' AND YEAR(tanggal)='".$_GET['tahun']."'");
    $tidak_puas=$query2->num_rows();
    }    
    }else{ // Jika user tidak mengklik tombol tampilkan     
    echo '<b>Semua Data Transaksi</b><br /><br />';       
    
    $query=$this->db->query("SELECT * FROM data WHERE respon = '1' ");
    $sangat_puas=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM data WHERE respon = '2' ");
    $cukup_puas=$query1->num_rows();
    $query2=$this->db->query("SELECT * FROM data WHERE respon = '3' ");
    $tidak_puas=$query2->num_rows(); // Tampilkan semua data transaksi diurutkan berdasarkan tanggal    
    }  
    ?>
                <tr>
                  
                  <td class="center"><?php echo $sangat_puas;?></td>
                  <td class="center"><?php echo $cukup_puas;?></td>
                  <td class="center"><?php echo $tidak_puas;?></td>
                </tr>
			
                </tbody>
              </table>
              <div class="row konten">
	<div class="col-md-12 col-sm-12">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</div>
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

  <script type="text/javascript" src="<?php echo base_url() ?>asset/chart/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Total Responden",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "doughnut",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y} Responden",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $sangat_puas; ?>, name: "Sangat Puas", legendMarkerType: "triangle"},
				{  y: <?php echo $tidak_puas; ?>, name: "Tidak Puas", legendMarkerType: "square"},
				{  y: <?php echo $cukup_puas; ?>, name: "Cukup Puas", legendMarkerType: "circle"}
			]
		}
		]
	});
	chart.render();
}
</script>


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
