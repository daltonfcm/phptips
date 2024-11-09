<?php $this->layout("_theme"); ?>

    <div class="row">
        <h1 class="contact">Lista de Usuários</h1>
        <br>
    </div>

    <div class="">
        <?php if ($users): ?>
            <div class="row row-data">
                <div class="d-flex gap-2 flex-wrap justify-content-between">
                    <?php foreach ($users as $user): ?>
                        <div class="card shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="card-title m-0">
                                    <a class="text-decoration-none" href="<?= $router->route('userController.show', [
                                        'userId' => $user->id
                                    ]) ?>">
                                        <?= $user->first_name . " " . $user->last_name ?>
                                    </a>
                                </h5>
                                <div class="">
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>

            <div class="container text-center alert alert-danger mt-5 py-5" role="alert">

                <h4>Não existem usuários cadastrados!</h4>
                <h5>A tabela de usuários está vazia.</h5>


            </div>
        <?php endif; ?>
    </div>

<?php $this->start("sidebar"); ?>
    <a href="<?= url(); ?>" title="Voltar ao início!">Voltar</a>
    <a href="<?= $router->route('userController.create') ?>">Novo usuário</a>
<?php $this->end(); ?>