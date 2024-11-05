<?php $this->layout("_theme"); ?>

<div class="row">
    <h1>Dados do usuário</h1>
    <h2><?= "{$user->first_name} {$user->last_name}" ?></h2>
</div>

<div class="row">
    <input type="text" name="email" value="<?= $user->email ?>">
</div>
