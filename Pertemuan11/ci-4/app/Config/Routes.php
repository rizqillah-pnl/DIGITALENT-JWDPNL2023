<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('login', ['filter' => 'guest'], function ($routes) {
    $routes->get('/', 'Login::index',);
    $routes->post('/', 'Login::proses');
});

$routes->group('register', ['filter' => 'guest'], function ($routes) {
    $routes->get('/', 'Register::index');
    $routes->post('/', 'Register::store');
});

$routes->group('mahasiswa', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Mahasiswa::index');
    $routes->get('create', 'Mahasiswa::create');
    $routes->get('edit/(:num)', 'Mahasiswa::edit/$1');
    $routes->post('insert', 'Mahasiswa::store');
    $routes->post('hapus/(:num)', 'Mahasiswa::hapus/$1');
    $routes->post('update/(:num)', 'Mahasiswa::update/$1');
    $routes->post('editxml', 'Mahasiswa::editxml');
    // $routes->post('search', 'Mahasiswa::search');
    // $routes->get('searchAjax', 'Mahasiswa::search_result');
});

$routes->post('/logout', 'Login::logout', ['filter' => 'auth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
