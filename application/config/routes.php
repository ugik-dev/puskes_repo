<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['administrator'] = 'admin/login';
$route['admin'] = 'admin/login';
$route['profil/(:any)'] = 'menu/index/profil/$1';
$route['informasi/(:any)'] = 'menu/index/informasi/$1';
$route['pelayanan/(:any)'] = 'menu/index/pelayanan/$1';
$route['poskesdes_pustu/(:any)'] = 'menu/index/poskesdes_pustu/$1';

$route['pegawai'] = 'menu/pegawai';
$route['bank_data'] = 'menu/bank_data';
$route['galeri'] = 'menu/galeri';

$route['berita'] = 'berita/index/Berita';
$route['berita/(:any)'] = 'berita/detail/Berita/$1';

$route['pengumuman'] = 'berita/index/Pengumuman';
$route['pengumuman/(:any)'] = 'berita/detail/Pengumuman/$1';
$route['search'] = 'berita/search';

$route['agenda'] = 'berita/index/Agenda';
$route['agenda/(:any)'] = 'berita/detail/Agenda/$1';

$route['loker'] = 'berita/index/loker';
$route['loker/(:any)'] = 'berita/detail/loker/$1';

$route['artikel/(:any)'] = 'blog/detail/$1';
// $route['informasi'] = 'program';
// $route['informasi'] = 'program/index';
// $route['inovasi/(:any)'] = 'program/detail/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
