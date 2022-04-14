<div class="row konten">
	<div class="col-md-12 col-sm-12">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</div>
<?php
date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y-m-d");
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
}
?>
<font color='#191970'><b><?php echo "Grafik Survey Penilaian Kepuasan Masyarakat tanggal ". tgl_indo($tgl);?></b></font>
<script type="text/javascript" src="<?php echo base_url() ?>asset/chart/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Result Hari Ini?",
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
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y} Manusia",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $senang; ?>, name: "Sangat Puas", legendMarkerType: "triangle"},
				{  y: <?php echo $kurang; ?>, name: "Tidak Puas", legendMarkerType: "square"},
				{  y: <?php echo $cukup; ?>, name: "Cukup Puas", legendMarkerType: "circle"}
			]
		}
		]
	});
	chart.render();
}
</script>