<?php

namespace MVC\core;

class controller
{
    public function view($path, $title)
    {
        extract($title);
        require_once(VIEW . DS . $path . '.php');
    }
}
