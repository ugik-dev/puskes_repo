<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_survey extends CI_Model
{

    public function getAll($filter = [])
    {
        $this->db->from('data');
        $this->db->order_by('tanggal', 'desc');
        if (!empty($filter['tahun'])) $this->db->where('YEAR(tanggal)', $filter['tahun']);
        $res = $this->db->get();

        return $res->result_array();
    }

    public function getTahun($filter = [])
    {
        $res = $this->db->query('SELECT DISTINCT YEAR(tanggal) as tahun FROM `data` ORDER BY tanggal');
        // $this->db->from('data');
        // $this->db->order_by('tanggal', 'desc');
        // $res = $this->db->get();

        return $res->result_array();
    }

    function getresult()
    {
        $tgl = date("Y-m-d");
        $senang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '1' AND tanggal = '$tgl'")->row_array();
        $cukup = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '2' AND tanggal = '$tgl'")->row_array();
        $kurang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '3' AND tanggal = '$tgl'")->row_array();
        $res = array(
            "senang" => $senang['data'],
            "cukup" => $cukup['data'],
            "kurang" => $kurang['data']
        );
        return $res;
    }
    function insertdata($tabel, $data)
    {
        $res = $this->db->insert($tabel, $data);
        return $res;
    }

    function get_all_survey()
    {
        $hsl = $this->db->query("SELECT * FROM data ORDER BY id DESC");
        return $hsl;
    }
    function view_by_date($date)
    {
        $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya          
        return $this->db->get('data'); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter 
    }
    function view_by_month($month, $year)
    {
        $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan      
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun     
        return $this->db->get('data'); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }
    function view_by_year($year)
    {
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun         
        return $this->db->get('data'); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter 
    }
    function view_all2()
    {
        return $this->db->get('data');
        $this->db->order_by('id DESC'); // Tampilkan semua data transaksi  
    }
    function view_all()
    {
        $hsl = $this->db->query("SELECT * FROM data ORDER BY id DESC");
        return $hsl;
    }

    function option_tahun()
    {
        $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tgl    
        $this->db->from('data'); // select ke tabel transaksi     
        $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)        
        $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tgl                
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas    
    }
}
