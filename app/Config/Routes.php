<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('pendaftaran', 'UserController::register');

$routes->post('/pendaftaran/submit', 'PendaftaranController::submit');
