<?php

namespace Source\Controllers\App;

use Source\Core\Controller;

class UserController extends Controller
{
    public function list(): void
    {
        echo $this->view->render('users/list');
    }

    public function store(?array $data): void
    {
        // Aqui ele vai chamar o MODEL User para lidar com regra de negócios e salvar no banco de dados
        var_dump($data);
    }

    public function update(?array $data): void
    {

    }

    public function destroy(?array $data): void
    {

    }
}