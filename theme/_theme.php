<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? "Vazio" ?></title>
    <link rel="stylesheet" href="<?= url("theme/style.css"); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="main_nav">
    <?php if ($this->section("sidebar")):
        echo $this->section("sidebar");
    else:
    ?>
        <a title="" href="<?= $router->route('webController.home') ?>">Home</a>
        <a title="" href="<?= $router->route('userController.list') ?>">Usuarios</a>
        <a title="" href="<?= $router->route('webController.contact') ?>">Contato</a>
        <a title="" href="<?= url('teste') ?>">Teste</a>
    <?php
    endif;
    ?>
</nav>

<main class="main_content">
    <?= $this->section("content") ?>
</main>

<footer class="main_footer">
    <?= SITE; ?> - Todos os Direitos Reservados
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<?= $this->section("scripts") ?>
</body>
</html>
