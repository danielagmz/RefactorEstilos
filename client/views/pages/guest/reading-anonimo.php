<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <title>Vista de lectura</title>
</head>

<body class="anonimo">
    <div class="container">
    <?php include_once('client/views/common/nav-anonimo.php') ?>
        <main class="content">
            <div class="content__title"></div>
            <div class="content__body reading__body">
                <p class="article__content"></p>
            </div>
            <a class="form__button form__button--mark" href="<?php echo BASE_URL ?>">Tornar</a>
        </main>
        
</body>

</html>