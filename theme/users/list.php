<?php $this->layout("_theme"); ?>

<div class="row">
    <h1>Usuários</h1>
    <a href="<?= $router->route('userController.create') ?>">
        Criar usuário
    </a>
</div>

<div class="users">
    <?php if ($users): ?>

        <?php foreach ($users as $user): ?>
            <article class="users_user">
                <a href="<?= $router->route('userController.show', [
                        'userId' => $user->id,
                ]) ?>">
                    <h3><?= $user->first_name, " ", $user->last_name; ?></h3>
                </a>
            </article>
        <?php endforeach; ?>

    <?php else: ?>
        <h4>Não existem usuários cadastrados!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, tempora!</p>
    <?php endif; ?>
</div>