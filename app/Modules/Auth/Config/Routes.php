<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('auth', '\Modules\Auth\Controllers\Auth::index');
