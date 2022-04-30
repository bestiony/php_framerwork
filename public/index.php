<?php
error_reporting(E_ALL);


require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\Authcontroller;
use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));


$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);

$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [Authcontroller::class, 'login']);
$app->router->post('/login', [Authcontroller::class, 'login']);

$app->router->get('/register', [Authcontroller::class, 'register']);
$app->router->post('/register', [Authcontroller::class, 'register']);

$app->run();