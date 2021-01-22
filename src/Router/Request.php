<?php
namespace Framework\Router;

class Request 
{

    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path,'?');
        if($position === false) {
            return $path;
        }
        $path = substr($path,0,$position);
        return $path;
    }

    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getBody() {
        $body = [];

        if($this->getMethod() === 'GET') {
            foreach($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if($this->getMethod() === 'POST') {
            foreach($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}