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
        echo $this->view->render('users/create');
    }

    public function store(?array $data): void
    {
        $user = new User();

        if (!$user->saveUser($data)) {
            echo "Erro ao cadastrar: {$user->fail()->getMessage()}";
            return;
        }

        $this->router->redirect('userController.list');
    }

    public function update(?array $data): void
    {
        $userId = $data['userId'] ?? null;
        $user = (new User())->findById($userId);

        if (!$user->saveUser($data)) {
            echo "Erro ao atualizar: {$user->fail()->getMessage()}";
            return;
        }

        $this->router->redirect('userController.show', [
            'userId' => $userId
        ]);
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

//    public function update(?array $data): void
//    {
//        $userId = $data['userId'] ?? null;
//        $user = (new User())->findById($userId);
//
//
//        if ($user) {
//            $user->first_name = $data['first_name'];
//            $user->last_name = $data['last_name'];
//
//            if ($user->save()) {
//                echo "usuario atualizado com sucesso!";
//            } else {
//                echo "Erro ao atualizar o usuario!";
//            }
//            var_dump($userId);
//        }
//    }

    public function delete(?array $data): void
    {
        $userId = $data['userId'] ?? null;
        $user = (new User())->findById($userId);

        if (!$user->destroy()) {
            echo "Erro ao deletar: {$user->fail()->getMessage()}";
            return;
        }

        $this->router->redirect('userController.list');
    }
}