<?php

namespace Source\Core;

use CoffeeCode\Router\Router;

class Controller
{
    protected View $view;
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->view = new View($router);
        $this->router = $router;
    }

}