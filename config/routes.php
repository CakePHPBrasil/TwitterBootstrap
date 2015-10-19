<?php
use Cake\Routing\Router;

Router::plugin('TwitterBootstrap', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
