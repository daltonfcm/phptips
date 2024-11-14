<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Example\Models\Address;
use PDOException;
use Source\Support\Str;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", [
            "first_name",
            "last_name",
//            "genre"
        ]);
    }

    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function bootstrap(
        ?string $firstName,
        ?string $lastName,
        ?string $genre
    ): User
    {
        $this->first_name = trim(mb_strtoupper($firstName));
        $this->last_name = trim(mb_strtoupper($lastName));
        $this->genre = trim(mb_strtoupper($genre));

        return $this;
    }

    public function saveUser(?array $data): bool
    {
        $this->bootstrap(
            $data['first_name'] ?? null,
            $data['last_name'] ?? null,
            $data['genre'] ?? null
        );

        if (!$this->save()) {
            return false;
        }

        /* method de criação ou salvação do Address */
//        $address = (new Address())->findByUser() ?? (new Address()); // se não encontrar do usuário, cria um novo, para então colocar os dados
//
//        if (!$address->saveAddress()) {
//            $this->fail = $address->fail();
//            return false;
//        }


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

        $this->first_name = Str::clearSymbolsAndNumbers($this->first_name);
        $this->last_name = Str::clearSymbolsAndNumbers($this->last_name);

        return true;
    }

    public function validationGenre(): bool
    {
//        $allowedGenres = ['FEMININO', 'F', 'M', 'MASCULINO'];
//        if (!in_array($this->genre, $allowedGenres)) {
//            $this->fail = new PDOException("Selecione Feminino ou Masculino");
//            return false;
//        }

        $genre = match ($this->genre) {
            'F', 'FEMININO', 'f', 'feminino' => 'F',
            'M', 'MASCULINO', 'm', 'masculino' => 'M',
            default => null
        };

        if (empty($genre)) {
            $this->fail = new PDOException("Selecione Feminino ou Masculino");
            return false;
        }

        $this->genre = $genre;

        return true;
    }

    public function save(): bool
    {
        if (!$this->validationName()) {
            return false;
        }

//        if (!$this->validationGenre()) {
//            return false;
//        }

        return parent::save();
    }
}