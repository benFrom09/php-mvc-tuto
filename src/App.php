<?php
namespace Framework;

use Framework\Router\Router;
use Framework\Router\Request;
use Framework\Router\Response;


class App 
{

    public Router $router;
    public Request $request;

    public static $ROOT_DIR;

    public Response $response;

    public static App $app;

    public Controller $controller;

    public function __construct($rootDirectory) {

        self::$ROOT_DIR = $rootDirectory;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);
        self::$app = $this;
    }

    public function run() {
        echo $this->router->resolve();
    }
}