<?php

require_once __DIR__ . '/../bootstrap.php';

$app->get('/', function() use ($app) { return 'Hello, cruel world.'; });

$app->run();