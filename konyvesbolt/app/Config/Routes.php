<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/welcome_message', 'Home::udv');
$routes->get('/regisztracio', 'Home::reg');