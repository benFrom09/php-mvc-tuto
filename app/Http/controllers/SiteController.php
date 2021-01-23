<?php
namespace App\Http\controllers;

use Framework\App;
use Framework\Controller;
use Framework\Router\Request;


class SiteController extends Controller
{
    public function contact() {

        $name = [
            'name' => 'ben'
        ];
        return $this->render('contact',$name);
    }

    public function handleContact(Request $request) {
        $body = $request->getBody();
        var_dump($body);
    }
}