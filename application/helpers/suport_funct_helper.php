<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



if (!function_exists('getProfil')) {
    function getProfil()
    {
        $CI    = &get_instance();
        $CI->load->database();
        $CI->db->from('profil');
        $query = $CI->db->get();
        $obj_res =  $query->result();
        return $obj_res[0];
    }
}

if (!function_exists('getMenu')) {
    function getMenu()
    {
        $CI    = &get_instance();
        $CI->load->database();
        $CI->db->select('id_menu, nama_menu, kategori, no_urut,slug');
        $CI->db->from('menu');
        $CI->db->order_by('no_urut');
        $query = $CI->db->get();
        $res =  $query->result_array();
        $ret = array();
        foreach ($res as $r) {
            $ret[$r['kategori']][] = $r;
        }
        return $ret;
    }
}

if (!function_exists('getHeader')) {
    function getHeader()
    {
        $CI    = &get_instance();
        $CI->load->database();
        $CI->db->from('header');
        $CI->db->order_by('posisi');
        $query = $CI->db->get();
        $obj_res =  $query->result_array();
        return $obj_res;
    }
}

if (!function_exists('bulan_indo_singkat')) {
    function bulan_indo_singkat($num)
    {

        $bulan = array(
            1 =>   'Jan',
            'Feb',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agust',
            'Sept',
            'Okt',
            'Nov',
            'Des'
        );

        return $bulan[(int)$num];
    }
}
if (!function_exists('tgl_indo')) {
    function tgl_indo($tanggal)
    {
        $bulan = array(
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

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
