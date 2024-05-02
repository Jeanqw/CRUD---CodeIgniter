<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadastro', 'ActionsCRUD::index', ['as' => 'cadastro']);
$routes->post('/cadastro', 'ActionsCRUD::cadastrar', ['as' => 'sendData']);
$routes->get('/users', 'ActionsCRUD::select');
$routes->get('/delete/(:any)', 'ActionsCRUD::delete/$1');
$routes->post('/update/(:any)', 'ActionsCRUD::update/$1');
