<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Login', 'Login::index');
$routes->post('/Login', 'Login2::index');
$routes->get('/Login2', 'Login2::index');
$routes->post('/Login2', 'Login2::index');
$routes->get('/Login3', 'Login3::index');
$routes->post('/Login3', 'Login3::index');
$routes->get('/Login4', 'Login4::index');
$routes->post('/Login4', 'Login4::index');