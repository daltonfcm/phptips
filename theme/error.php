<?php $this->layout("_theme"); ?>

<div class="error">
    <h2>Ooooops! erro <?= $error; ?>!</h2>
    <p>This page does not exist.</p>
</div>

<?php $this->start("sidebar"); ?>
    <a href="<?= url(); ?>" title="Voltar ao início!">Voltar</a>
<?php $this->end(); ?>
