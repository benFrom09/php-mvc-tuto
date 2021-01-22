<?php
namespace Framework\Router;

use Framework\App;


class Router
{
    protected array $routes = [];
    protected Request $request;

    public function __construct(Request $request,Response $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($url,$callable) {
        $this->routes['GET'][$url] = $callable;
    }

    public function post($url,$callable) {
        $this->routes['POST'][$url] = $callable;
    }

    public function resolve() {

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callable = $this->routes[$method][$path] ?? false;

        if($callable === false) {
            $this->response->setStatusCode(404);
            return  $this->renderContent('Route not found');
        }

        if(is_string($callable)) {
            return $this->renderView($callable);
        }
        if(is_array($callable)) {
            $callable[0] = new $callable[0]();
        }

        return  call_user_func($callable,$this->request);
    }

    public function renderView(string $view,array $params = []) {
        $layout = $this->getLayout();
        $viewContent = $this->renderViewOnly($view,$params);
        return str_replace('{{ content }}',$viewContent,$layout);  
    }


    public function renderContent(string $viewContent) {
        $layout = $this->getLayout();
        return str_replace('{{ content }}',$viewContent,$layout);  
    }
    protected function getLayout() {
        ob_start();
        require_once App::$ROOT_DIR . "/resources/views/layout/main.php";
        return ob_get_clean();
    }

    protected function renderViewOnly(string $view,array $params = []) {
        extract($params);
        ob_start();
        require_once App::$ROOT_DIR . "/resources/views/{$view}.php";
        return ob_get_clean();
    }
}