<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$session = new \Source\Support\Session();
$router = new Router(ROOT);

/*
 * APP
 */
$router->group(null)->namespace("Source\Controllers\App");
$router->get("/", "WebController:home", "webController.home");
$router->get("/contato", "WebController:contact", "webController.contact");

/*
 * USER CONTROLLER [CRUD]
 */
$router->group("/usuarios")->namespace("Source\Controllers\App");
$router->get("/", "WebController:usuarios", "webController.usuarios");
$router->get("/lista", "UserController:list", "userController.list");
$router->get("/criar", "UserController:create", "userController.create");
$router->post("/store", "UserController:store", "userController.store");
$router->get("/usuario/{userId}", "UserController:show", "userController.show");
$router->post("/update/{userId}", "UserController:update", "userController.update");
$router->post("/delete/{userId}", "UserController:delete", "userController.delete");

/*
 * ERROR
 */
$router->group("/ops")->namespace("Source\Controllers");
$router->get("/{errcode}", "ErrorController:show", "error.show");

/*
 * PROCESS
 */
$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}
