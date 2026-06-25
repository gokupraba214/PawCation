<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/solution', 'Home::solution');
$routes->get('/features', 'Home::features');
$routes->get('/pricing', 'Home::pricing');
