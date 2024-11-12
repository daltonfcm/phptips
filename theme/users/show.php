<?php $this->layout("_theme"); ?>

<div class="w-50 p-3 mx-auto text-center bg-secondary bg-gradient rounded shadow">
    <h1 class="">Atualizar usuário:</h1>
    <h2 class=""><?= "{$user->first_name} {$user->last_name}" ?></h2>

    <form action="" method="post" class="p-5 m-5 ">
<!--    <input type="text" name="first_name" id="first_name" placeholder="Nome" value="--><?php //= $user->first_name ?><!--">-->
<!--    <input type="text" name="last_name" id="last_name" placeholder="Sobrenome" value="--><?php //= $user->last_name ?><!--">-->
<!--    <input type="text" name="email" value="--><?php //= $user->email ?><!--">-->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nome:</span>
            <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $user->first_name ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Sobrenome:</span>
            <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user->last_name ?>">
        </div>

<!--        <div class="input-group mb-3">-->
<!--            <span class="input-group-text" id="inputGroup-sizing-default">Default</span>-->
<!--            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">-->
<!--        </div>-->

        <button class="btn btn-success" type="submit">&#128190; Save</button>
    </form>
</div>

<?php $this->start("sidebar"); ?>
    <a title="" href="<?= $router->route('webController.home') ?>">Home</a>
    <a title="Voltar para lista de usuários" href="<?= $router->route('userController.list') ?>">Voltar</a>

<?php $this->end(); ?>