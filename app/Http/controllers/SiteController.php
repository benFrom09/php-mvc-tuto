<?php
namespace App\Http\controllers;

use Framework\App;
use Framework\Router\Request;


class SiteController
{
    public function contact() {

        $name = [
            'name' => 'ben'
        ];
        return App::$app->router->renderView('contact',$name);
    }

    public function handleContact(Request $request) {
        $body = $request->getBody();
        var_dump($body);
    }
}