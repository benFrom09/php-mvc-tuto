<?php
namespace Framework;

use Framework\Router\Router;
use Framework\Router\Request;


class App 
{

    public Router $router;
    public Request $request;

    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        $this->router->resolve();
    }
}