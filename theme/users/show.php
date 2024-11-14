<?php $this->layout("_theme"); ?>

    <h1 class="text-center">Editar usuário:</h1>
    <div class="w-50 mx-auto text-center bg-form bg-gradient rounded shadow p-5 m-5">
        <h2 class="text-white mb-3 "><?= "{$user->first_name} {$user->last_name}" ?></h2>

        <div>
            <form class="d-inline" action="<?= $router->route('userController.update', [
                'userId' => $user->id
            ]) ?>" method="post">

                <!--    <input type="text" name="email" value="--><?php //= $user->email ?><!--">-->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                    <input type="text" name="first_name" id="first_name" class="form-control"
                           value="<?= $user->first_name ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Sobrenome:</span>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user->last_name ?>">
                </div>

                <div class="btn-group p-3" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                </div>
                <button class="btn btn-success btn-lg" type="submit">&#128190; Save</button>
            </form>

            <form class="d-inline" action="<?= $router->route('userController.delete', [
                'userId' => $user->id
            ]) ?>" method="post">
                <button type="submit" class="btn btn-danger btn-lg">Delete</button>
            </form>
        </div>
    </div>

<?php $this->start("sidebar"); ?>
    <a title="" href="<?= $router->route('webController.home') ?>">Home</a>
    <a title="Voltar para lista de usuários" href="<?= $router->route('userController.list') ?>">Voltar</a>
<?php $this->end(); ?>