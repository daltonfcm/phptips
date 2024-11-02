<?php

namespace Source\Core;

use CoffeeCode\Router\Router;

class Controller
{
    protected View $view;

    public function __construct(Router $router)
    {
        $this->view = new View($router);
    }
}