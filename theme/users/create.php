<?php $this->layout("_theme"); ?>

<div class="contact create">
    <h1>Criar Usuário</h1>
    <br><br>
    <form action="<?= $router->route('userController.store') ?>" method="post">
<!--         <label for="first_name">Nome</label>-->
        <input type="text" name="first_name" id="first_name" placeholder="Nome">
<!--         <label for="last_name">Sobrenome</label>-->
        <input type="text" name="last_name" id="last_name" placeholder="Sobrenome">
<!--        <label for="sexo">Sexo:</label>-->
        <select id="sexo" name="sexo" required>
            <option value="">Sexo</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select>
        <button class="" type="submit">&#128190; Salvar</button>

    </form>
</div>

<?php $this->start("sidebar"); ?>
    <a title="" href="<?= $router->route('webController.home') ?>">Home</a>
    <a title="Voltar para lista de usuários" href="<?= $router->route('userController.list') ?>">Voltar</a>

<?php $this->end(); ?>
