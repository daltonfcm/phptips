<?php

namespace Source\Controllers;

use Source\Core\Controller;

class ErrorController extends Controller
{
    public function show(array $data) : void
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | " . SITE,
            "error" => $data["errcode"]
        ]);
    }
}