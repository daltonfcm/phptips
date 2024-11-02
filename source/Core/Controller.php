<?php

namespace Source\Core;

use League\Plates\Engine;

class Controller
{
    private Engine $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../../theme");
    }
}