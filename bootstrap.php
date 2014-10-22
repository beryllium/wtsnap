<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application;

// select the execution environment
if (isset($app_env) && in_array($app_env, array('prod','dev','test'))) {
    $app['env'] = $app_env;
} else {
    $app['env'] = 'prod';
}
