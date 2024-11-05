<?php $this->layout("_theme"); ?>

<div class="row">
    <h1>Criar Usuário</h1>
    <a href="<?= $router->route('userController.list') ?>">
        Lista de usuários
    </a>
</div>

<div class="row">
    <form action="<?= $router->route('userController.store') ?>" method="post">
        <div>
            <input type="text" name="first_name" id="first_name">
            <label for="first_name">Nome</label>
        </div>
        <div>
            <input type="text" name="last_name" id="last_name">
            <label for="last_name">Sobrenome</label>
        </div>
        <div>
            <button type="submit">Cadastrar usuário</button>
        </div>
    </form>
</div>