<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/form', 'FormController::index');
$routes->post('form/submit', 'FormController::submit');
