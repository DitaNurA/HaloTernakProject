<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/**Admin */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Admin\Dashboard::dashboard');

$routes->get('petugas', 'Admin\Petugas::index');
$routes->get('petugas/create', 'Admin\Petugas::createForm');  // Route untuk menampilkan form create
$routes->post('petugas/create', 'Admin\Petugas::store'); // Route untuk memproses form create (POST)
$routes->get('petugas/detail/(:num)', 'Admin\Petugas::edit/$1');
$routes->post('petugas/update/(:segment)', 'Admin\Petugas::update/$1');
$routes->post('petugas/delete/(:num)', 'Admin\Petugas::delete/$1');



    $routes->get('admin/peternak', 'Admin\Peternak::index');
    $routes->get('admin/peternak/detail/(:num)', 'Admin\Peternak::detail/$1');
    $routes->post('admin/peternak/update/(:num)', 'Admin\Peternak::update/$1');

$routes->get('/posternak', 'Admin\PostinganTernak::index');
$routes->get('/detail_posternak', 'Admin\PostinganTernak::detail');

$routes->get('admin/obat', 'Admin\Obat::index');
$routes->get('admin/obat/create', 'Admin\Obat::create');
$routes->post('admin/obat/create', 'Admin\Obat::store');
$routes->get('admin/detail_obat/(:num)', 'Admin\Obat::detail/$1');
$routes->post('admin/update_obat/(:num)', 'Admin\Obat::update/$1');

$routes->get('/edukasi', 'Admin\Edukasi::index');
$routes->get('/edukasi/create', 'Admin\Edukasi::create');
$routes->get('/edukasi/detail', 'Admin\Edukasi::detail');

$routes->get('/kotak_saran', 'Admin\KotakSaran::index');
$routes->get('/akun', 'Admin\Akun::index');

/**DOkter/petugas */
$routes->get('/home', 'Dokter\HomeController::home');
$routes->get('/dokter', 'Dokter\C_Schedule::index');
$routes->get('/schedule', 'Dokter\C_Schedule::jadwal');

$routes->get('/h_order1', 'Dokter\C_Order::index1');
$routes->get('/h_order2', 'Dokter\C_Order::index2');
$routes->get('/h_order3', 'Dokter\C_Order::index3');
$routes->get('/order_done', 'Dokter\C_Order::c_done');

$routes->get('/layanan', 'Dokter\C_Service::index');
$routes->get('/jual', 'Dokter\C_Sell::index');
$routes->get('/info_obat', 'Dokter\C_Obat::index');