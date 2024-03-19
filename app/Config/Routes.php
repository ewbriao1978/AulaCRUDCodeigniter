<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tela','Home::telinha');
$routes->get('/formulario','Home::apresenta_formulario');
$routes->post('/formreceivedata','Home::receiveData');
$routes->get('/delete/(:num)','Home::deletarItemPorURL/$1');
$routes->post('/delete','Home::deletarItem');
$routes->post('/editform','Home::editarItem');
$routes->post('/formupdatedata','Home::updateData');
