<?php
class Survei extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('mod_survey');
	}


	public function index()
	{
		// function index()
		// {
		// $this->m_kontak->update_status_kontak();
		// $x['data'] = $this->m_kontak->get_all_inbox();
		// $this->load->view('admin/v_inbox', $x);
		// }
		// 	if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan            
		// 		$filter = $_GET['filter']; // Ambil data filder yang dipilih user            
		// 		if ($filter == '1') { // Jika filter nya 1 (per tanggal)               
		// 			$tgl = $_GET['tanggal'];
		// 			$ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));

		// 			$transaksi = $this->mod_survey->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel           
		// 		} else if ($filter == '2') { // Jika filter nya 2 (per bulan)               
		// 			$bulan = $_GET['bulan'];
		// 			$tahun = $_GET['tahun'];
		// 			$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		// 			$ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;

		// 			$transaksi = $this->mod_survey->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel           
		// 		} else { // Jika filter nya 3 (per tahun)              
		// 			$tahun = $_GET['tahun'];
		// 			$ket = 'Data Transaksi Tahun ' . $tahun;

		// 			$transaksi = $this->mod_survey->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel           
		// 		}
		// 	} else { // Jika user tidak mengklik tombol tampilkan         
		// 		$ket = 'Semua Data Transaksi';

		// 		$transaksi = $this->mod_survey->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel       
		// 	}
		// 	$x['ket'] = $ket;
		// 	$x['transaksi'] = $transaksi;
		// 	$x['option_tahun'] = $this->mod_survey->option_tahun();
		// 	$this->load->view('admin/v_survey', $x);
	}
}
