<?php


require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\UserControllers;
use app\core\Application;

$app = new Application();

$app->router->get('/getUser',[UserControllers::class, 'readUsers'] );

$app->run();