<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Load routes defined by each application module.
foreach (glob(APPPATH . 'Modules/*/Config/Routes.php') ?: [] as $moduleRoutes) {
    require $moduleRoutes;
}
