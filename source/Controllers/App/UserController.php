<?php

namespace Source\Controllers\App;

use Source\Core\Controller;
use Source\Models\User;

class UserController extends Controller
{
    public function list(): void
    {
        echo $this->view->render('users/list', [
            'users' => (new User())->find()->fetch(true)
        ]);
    }

    public function create(): void
    {
        echo $this->view->render('users/form');
    }

    public function store(?array $data): void
    {
        $user = new User();

        if (!$user->createUser($data)) {
            echo "Erro ao cadastrar: {$user->fail()->getMessage()}";
            return;
        }

        $this->router->redirect('userController.list');
    }

    public function show(?array $data): void
    {
        $userId = $data['userId'] ?? null;

        if (empty($userId) || !$user = (new User())->find("id = :id", "id={$userId}")->fetch(false)) {
            $this->router->redirect('webController.home');
            return;
        }

        echo $this->view->render('users/show', [
            'user' => $user
        ]);
    }

    public function update(?array $data): void
    {

    }

    public function destroy(?array $data): void
    {

    }
}