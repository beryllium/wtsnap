<?php

require_once __DIR__ . '/../bootstrap.php';

$app->get('/', function() use ($app) { return 'Hello, cruel world.'; });

// return $app for phpunit tests, or run the app for production/development
if (isset($app['env']) && 'test' == $app['env']) {
    return $app;
} else {
    $app->run();
    exit();
}