<?php
namespace App\Http\controllers;

use Framework\Controller;
use Framework\Router\Request;

class AuthController extends Controller
{
    public function login()
    {
        # code...
        return $this->render('login');
    }

    public function register(Request $request)
    {
        # code...
        if($request->isPost()) {
            return 'handle submitted data';
        }
        return $this->render('register');
    }
}