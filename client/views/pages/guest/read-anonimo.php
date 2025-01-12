<!DOCTYPE html>
<html lang="ca">

<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include_once('client/views/common/estilos.php');
    include_once('client/public/javascripts/common/fetchArticles.php')
    
    ?>
    
    <!-- <script type="module" src="public/javascripts/filter-anonimo.js"></script>
    <script type="module" src="public/javascripts/read-anonimo.js"></script> -->
    <title>Home</title>
</head>

<body class="anonimo">
    <div class="container">
        <?php include_once('client/views/common/nav-anonimo.php') ?>
        <main class="content">
            <div class="content__title">Articles</div>
            <?php include_once('client/views/common/barra_busqueda.php') ?>
            <div class="busqueda__resultados"></div>
        </main>
    </div>
</body>

</html>