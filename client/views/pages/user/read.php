<!DOCTYPE html>
<html lang="ca">
<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include_once('client/views/common/estilos.php'); 
    require_once('client/public/javascripts/common/fetchArticles.php');
    ?>
    <title>Home</title>
</head>

<body>
    <div class="container read">
    <?php include_once('client/views/common/nav.php') ?>
        <main class="content">
            <h1 class="content__title">Els meus articles</h1>
            <?php include_once('client/views/common/barra_busqueda.php') ?>
            <div class="busqueda__resultados"></div>
        </main>
    </div>
</body>
</html>