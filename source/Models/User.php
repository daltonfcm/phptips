<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use PDOException;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"]);
    }

    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function bootstrap(
        ?string $firstName,
        ?string $lastName
    ): User
    {
        $this->first_name = trim(mb_strtoupper($firstName));
        $this->last_name = trim(mb_strtoupper($lastName));

        return $this;
    }

    public function createUser(?array $data): bool
    {
        $this->bootstrap(
            $data['first_name'] ?? null,
            $data['last_name'] ?? null
        );

        if (!$this->save()) {
            return false;
        }

        return true;
    }

    public function validationName(): bool
    {
        if (empty($this->first_name) || empty($this->last_name)) {
            $this->fail = new PDOException("O nome e o sobrenome são campos obrigatórios");
            return false;
        }

        if (strlen($this->first_name) < 3 || strlen($this->first_name) > 40) {
            $this->fail = new PDOException("O primeiro nome deve conter entre 3 e 40 caracteres");
            return false;
        }

        if (strlen($this->last_name) < 2 || strlen($this->last_name) > 40) {
            $this->fail = new PDOException("O sobrenome deve conter entre 2 e 40 caracteres");
            return false;
        }

        return true;
    }

    public function save(): bool
    {
        if (!$this->validationName()) {
            return false;
        }

        return parent::save();
    }
}