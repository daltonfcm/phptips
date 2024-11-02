<div class="row">
    <form action="<?= $router->route('userController.store') ?>" method="post">
        <div>
            <input type="text" name="name" id="name">
            <label for="name"></label>
        </div>
        <div>
            <input type="text" name="email" id="email">
            <label for="email"></label>
        </div>
        <div>
            <button type="submit">Cadastrar usuário</button>
        </div>
    </form>
</div>