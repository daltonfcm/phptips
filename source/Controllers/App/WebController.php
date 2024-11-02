<?php

namespace Source\Controllers\App;

use CoffeeCode\Router\Router;
use Source\Core\Controller;
use Source\Models\User;

class WebController extends Controller
{
    public function __construct(Router $router)
    {
        parent::__construct($router);
    }

    public function home(): void
    {
        echo $this->view->render("home", [
            "title" => "Home | " . SITE,
            "users" => (new User())->find()->fetch(true)
        ]);
    }

    public function contact(): void
    {
        echo $this->view->render("contact", [
            "title" => "Contato | " . SITE
        ]);

    }
}