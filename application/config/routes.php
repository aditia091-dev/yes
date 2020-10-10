<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'Christian';
$route['gold-series'] = 'Christian/gold';
$route['eye-priority'] = 'Christian/eye';
$route['contactus'] = 'Christian/contactus';
$route['christianbretonproduct'] = 'Christian/christian_breton_product';
$route['contactus'] = 'Christian/contactus';
$route['lips-xl'] = 'Christian/d_lips';
$route['eye-priority'] = 'Christian/d_eye';
$route['gold-series'] = 'Christian/d_gold';
$route['product/(:any)'] = 'Christian/product/$1';

//Admin
$route['administrator'] 			= 'Admin/Login';
$route['proses-login'] 				= 'Admin/Login/proses';
$route['logout'] 					= 'Admin/Login/logout';
$route['dashboard'] 				= 'Admin/Dashboard';
$route['admin']						= 'Admin/Admin';
$route['tambah-admin']              = 'Admin/Admin/tambah';
$route['edit-admin/(:any)']         = 'Admin/Admin/edit/$1';
$route['hapus-admin']               = 'Admin/Admin/hapus';
$route['profile']             		= 'Admin/Profile';
$route['setting']             		= 'Admin/Profile/setting';
$route['change-password']     		= 'Admin/Profile/password';
$route['kategori'] 					= 'Admin/Kategori';
$route['tambah-kategori']           = 'Admin/Kategori/tambah';
$route['edit-kategori/(:any)']      = 'Admin/Kategori/edit/$1';
$route['hapus-kategori']            = 'Admin/Kategori/hapus';
$route['detail-kategori/(:any)/(:any)']		= 'Admin/Kategori/detail/$1/$2';
$route['tambah-konten/(:any)/(:any)']       = 'Admin/Kategori/tambah_konten/$1/$2';
$route['edit-konten/(:any)/(:any)/(:any)']  = 'Admin/Kategori/edit_konten/$1/$2/$3';
$route['hapus-konten']		= 'Admin/Kategori/hapus_konten';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
