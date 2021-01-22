<?php
namespace Framework\Router;



class Response
{
    public function setStatusCode(int $code) {
        http_response_code($code);
    }
}