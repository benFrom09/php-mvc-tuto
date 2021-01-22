<?php
namespace Framework\Router;


class Router
{
    protected array $routes = [];
    protected Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($url,$callable) {
        $this->routes['GET'][$url] = $callable;
    }

    public function resolve() {

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callable = $this->routes[$method][$path] ?? false;

        if($callable === false) {
            echo 'Route not found';
            exit;
        }

        echo call_user_func($callable);
        

    }
}