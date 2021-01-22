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
}