<?php

use Framework\App;

require __DIR__ . '/../vendor/autoload.php';


$app = new App();

$app->router->get('/',function() {
    return 'Hello world';
});

$app->router->get('/contact',function() {
    return 'contact page';
});



$app->run();