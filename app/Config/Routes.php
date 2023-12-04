<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/show', 'Api::show');
$routes->get('/api/utilite/', 'Api\Utilite::index');

$routes->get('/item/', 'Api\Utilite::index');
$routes->post('/item/', 'Api\Utilite::index');
$routes->delete('/item/', 'Api\Utilite::index');
$routes->put('/item/', 'Api\Utilite::index');
