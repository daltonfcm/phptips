<?php $this->layout("_theme"); ?>

<div class="row">
    <h1 class="contact">Lista de Usuários</h1>
    <br>
</div>

<div class="users">
    <?php if ($users): ?>

        <?php foreach ($users as $user): ?>
            <article class="users_user">
                <a href="<?= $router->route('userController.show', [
                        'userId' => $user->id,
                ]) ?>">
                    <h3><?= $user->first_name . " " . $user->last_name ?></h3>
                </a>

            </article>
            <button class="btn-delete">Delete</button>
        <?php endforeach; ?>

    <?php else: ?>
        <h4>Não existem usuários cadastrados!</h4>
        <p>A tabela de usuários está vazia!</p>
    <?php endif; ?>
</div>

<?php $this->start("sidebar"); ?>
    <a href="<?= url(); ?>" title="Voltar ao início!">Voltar</a>
    <a href="<?= $router->route('userController.create') ?>">Novo usuário</a>
<?php $this->end(); ?>