<?php

namespace Source\Core;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

class View
{
    private Router $router;
    private Engine $engine;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->engine = new Engine(__DIR__ . "/../../theme");
        $this->addData();
    }

    public function addData(): self
    {
        $this->engine->addData([
            'router' => $this->router
        ]);

        return $this;
    }

    public function render(string $templateName, array $data = []): string
    {
        $this->engine->addData($data);
        return $this->engine->render($templateName);
    }

    public function engine(): Engine
    {
        return $this->engine();
    }
}