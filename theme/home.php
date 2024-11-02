<?php $this->layout("_theme"); ?>

<div class="users">
    <?php if ($users):
        foreach ($users as $user):
            ?>
            <article class="users_user">
                <h3><?= $user->first_name, " ", $user->last_name; ?></h3>
            </article>
        <?php
        endforeach;
    else:
        ?>
        <h4>Não existem usuários cadastrados!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, tempora!</p>
    <?php
    endif; ?>
</div>