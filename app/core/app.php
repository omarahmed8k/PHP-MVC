<?php

namespace MVC\core;

class app
{
    private $controller = 'home';
    private $method = 'index';
    private $parametr = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode('/', $_SERVER['QUERY_STRING']);

            $this->controller = isset($url[0]) ? $url[0] . 'controller' : 'homecontroller';

            $this->method = isset($url[1]) ? $url[1] : 'index';

            unset($url[0], $url[1]);

            $this->parametr = array_values($url);
        } else {
            $this->controller = 'homecontroller';

            $this->method = 'index';
        }
    }

    private function render()
    {
        $controller = "MVC\controllers\\" . $this->controller;
        if (class_exists($controller)) {

            $controller = new $controller;

            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->parametr);
            } else {
                echo 'Method Faild';
            }
        } else {
            echo 'Faild';
        }
    }
}
