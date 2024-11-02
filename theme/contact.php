<?php $this->layout("_theme"); ?>

<div class="contact">
    <h2>Fale conosco!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, laborum?</p>

    <form action="<?= url("contact"); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu nome:"/>
        <input type="email" name="email" placeholder="Seu E-mail:"/>
        <textarea name="message" placeholder="Mensagem:" rows="3"></textarea>
        <button>Enviar</button>
    </form>
</div>

<?php $this->start("scripts"); ?>
<script>
    $(function () {
       $("button").after('<button type="reset">Limpar</button>');
    });
</script>
<?php $this->end(); ?>