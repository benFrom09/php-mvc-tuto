<?php

use App\Http\controllers\SiteController;
use Framework\App;

require __DIR__ . '/../vendor/autoload.php';


$app = new App(dirname(__DIR__));

$app->router->get('/',function() {
    return 'Hello world';
});

$app->router->get('/contact','home');

$app->router->get('/contact',[SiteController::class,'contact']);

$app->router->post('/contact',[SiteController::class,'handleContact']);


$app->run();