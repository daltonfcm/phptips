<?php

namespace Source\Controllers\App;

use Source\Core\Controller;
use Source\Models\User;

/**
 *
 */
class Web extends Controller
{
    /**
     * @return void
     */
    public function home(): void
    {
        $users = (new User())->find()->fetch(true);

        echo $this->view->render("home", [
            "title" => "Home | " . SITE,
            "users" => $users
        ]);
    }

    /**
     * @return void
     */
    public function contact(): void
    {
        echo $this->view->render("contact", [
            "title" => "Contato | " . SITE
        ]);
    }

    /**
     * @param array $data
     * @return void
     */
    public function error(array $data) : void
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | " . SITE,
            "error" => $data["errcode"]
        ]);
    }

}