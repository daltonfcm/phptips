<?php $this->layout("_theme"); ?>

    <h1 class="text-center">Editar usuário:</h1>
    <div class="w-50 mx-auto text-center bg-form bg-gradient rounded shadow p-5 m-5">
        <h2 class="text-white mb-3 fw-bold"><?= "{$user->first_name} {$user->last_name}" ?></h2>

        <div>
            <form class="d-inline" action="<?= $router->route('userController.update', [
                'userId' => $user->id
            ]) ?>" method="post">

                <!--    <input type="text" name="email" value="--><?php //= $user->email ?><!--">-->
                <div class="input-group mb-3">
                    <span class="input-group-text text-bg-dark" id="span-first-name">Nome:</span>
                    <input type="text" name="first_name" id="first_name" class="form-control"
                           value="<?= $user->first_name ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text text-bg-dark" id="span-last-name">Sobrenome:</span>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user->last_name ?>">
                </div>

                <div class="input-group mb-3 w-50 mx-auto">
                    <span class="input-group-text text-bg-dark" id="span-genre">Sexo:</span>
                    <select name="genre" id="genre" class="form-select" required>
                        <?php if ($user->genre == "F") { ?>
                            <option value="feminino" selected>Feminino</option>
                            <option value="masculino">Masculino</option>
                        <?php } elseif ($user->genre == "M") { ?>
                            <option value="feminino">Feminino</option>
                            <option value="masculino" selected>Masculino</option>
                        <?php } else { ?>
                            <option value="erro" selected>ERRO!</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                        <?php } ?>
                    </select>
                </div>

                <button class="btn btn-success btn-lg m-1" type="submit">&#128190; Save</button>
            </form>

            <form class="d-inline" action="<?= $router->route('userController.delete', [
                'userId' => $user->id
            ]) ?>" method="post">
                <button type="submit" class="btn btn-danger btn-lg m-1">Delete</button>
            </form>
        </div>
    </div>

<?php $this->start("sidebar"); ?>
    <a title="" href="<?= $router->route('webController.home') ?>">Home</a>
    <a title="Voltar para lista de usuários" href="<?= $router->route('userController.list') ?>">Voltar</a>
<?php $this->end(); ?>