<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->match(['post', 'options'], '/login', 'RozersController::pelangganLogin');

//REGISTRASI
$routes->resource('register', ['controller' => 'RegistrasiController']);
$routes->match(['put', 'options'], 'update/register/(:segment)', 'RegistrasiController::update/$1');
$routes->match(['delete', 'options'], 'delete/register/(:segment)', 'RegistrasiController::delete/$1');
$routes->match(['post', 'options'], 'insert-register', 'RegistrasiController::create');

//LOGIN
$routes->resource('Login', ['controller' => 'LoginController']);
$routes->match(['post', 'options'], 'login', 'LoginController::loginn');

//TRANSAKSI
$routes->resource('transaksi', ['controller' => 'Transaksi']);
$routes->match(['get', 'options'], 'lihat-transaksi/(:segment)', 'Transaksi::show/$1');
$routes->match(['put', 'options'], 'update-transaksi/(:segment)', 'Transaksi::update/$1');
$routes->match(['delete', 'options'], 'delete-transaksi/(:segment)', 'Transaksi::delete/$1');
$routes->match(['post', 'options'], 'insert-transaksi', 'Transaksi::create');


//LOGIN ADMIN
// $routes->resource('Loginn', ['controller' => 'UserAdminController']);
// $routes->match(['post', 'options'], 'loginadmin', 'UserAdminController::login');

// //ORDER
// $routes->resource('order', ['controller' => 'OrderController']);
// $routes->match(['post', 'options'], 'insert-order', 'OrderController::create');

// //ADMIN
// $routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
//     $routes->resource('order', ['controller' => 'AdminController']);
//     $routes->match(['post', 'options'], 'create/order', 'AdminController::create'); 
//     $routes->match(['put', 'options'], 'update/order/(:segment)', 'AdminController::update/$1');
//     $routes->match(['delete', 'options'], 'delete/order/(:segment)', 'AdminController::delete/$1');
// });


