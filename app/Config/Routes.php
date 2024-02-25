<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/surat', 'Home::surat');
$routes->get('/pameran', 'Home::pameran');
$routes->get('/koleksi', 'Home::koleksi');

$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dashboard/koleksi', 'Home::dashboardKoleksi');
$routes->get('/dashboard/surat', 'Home::dashboardSurat');
$routes->get('/dashboard/katalog', 'Home::dashboardKatalog');
$routes->get('/dashboard/admin', 'Home::dashboardAdmin');
$routes->get('/login', 'Home::login');
