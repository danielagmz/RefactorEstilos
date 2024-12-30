<!DOCTYPE html>
<html lang="ca">
<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <!-- <script type="module" src="public/javascripts/filter.js"></script>
    <script type="module" src="public/javascripts/read.js"></script>
    <script type="module" src="public/javascripts/paginacion.js"></script> -->
    <title>Home</title>
</head>

<body>
    <div class="container">
    <?php include_once('client/views/common/nav.php') ?>
        <main class="content">
            <div class="content__title">Tots els articles</div>
            <?php include_once('client/views/common/barra_busqueda.php') ?>
        </main>
    </div>
</body>
</html>