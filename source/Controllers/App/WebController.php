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

    public function usuarios(): void
    {
        $model = new User();

        $terms = "first_name = :first_name";
        $params = "first_name=Dalton";

        $find = $model->find($terms, $params); // monta a string da query

        echo $this->view->render("/users/list", [
            "title" => "Usuários | " . SITE,
            "users" => $find->fetch(true), //executa a query
            "numUsers" => $find->count()
        ]);
    }

    public function t()
    {
        $arrayDeUmUsuario = [
            'id' => 1,
            'nome' => 'Dalton'
        ];

        $arrayDeOutroUsuario = [
            'id' => 2,
            'nome' => 'João'
        ];

        $fetchTrue = [
            [
                'id' => 1,
                'nome' => 'Dalton'
            ],
            [
                'id' => 2,
                'nome' => 'João'
            ]
        ];
    }
}