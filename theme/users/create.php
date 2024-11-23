<?php $this->layout("_theme"); ?>


<h1 class="text-center">Novo Usuário</h1>

<div class="w-50 mx-auto text-center bg-form bg-gradient rounded shadow p-5 m-5">
    <div>
        <form class="d-inline" action="<?= $router->route('userController.store') ?>" method="post">

            <div class="input-group mb-3">
                <span class="input-group-text text-bg-dark" id="span-first-name">Nome:</span>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bg-dark" id="span-last-name">Sobrenome:</span>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>

            <div class="input-group mb-3 w-50 mx-auto">
                <span class="input-group-text text-bg-dark" id="span-genre">Sexo:</span>
                <select name="genre" id="genre" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                </select>
            </div>

            <button class="btn btn-success btn-lg m-1" type="submit">&#128190; Save</button>

        </form>
    </div>
</div>

<?php $this->start("sidebar"); ?>
<a title="" href="<?= $router->route('webController.home') ?>">Home</a>
<a title="Voltar para lista de usuários" href="<?= $router->route('userController.list') ?>">Voltar</a>
<?php $this->end(); ?>
