<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/*
 * APP
 */
$router->group(null)->namespace("Source\Controllers\App");
$router->get("/", "WebController:home", "web.home");
$router->get("/contato", "WebController:contact", "web.contact");

/*
 * USER CONTROLLER [CRUD]
 */
$router->group("/usuarios")->namespace("Source\Controllers\App");
$router->get("/", "UserController:list", "userController.list");
$router->post("/store", "UserController:store", "userController.store");

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
