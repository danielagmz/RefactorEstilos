<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php');
    include_once('client\public\javascripts\common\fetchArticles.php')
    ?>
    
    <title>Vista de lectura</title>
</head>

<body>
    <div class="container">
    <?php include_once('client/views/common/nav.php') ?>
        <main class="content">
            <div class="content__title"></div>
            <div class="content__body reading__body">
                    <p class="article__content"></p>
            </div>
            
        </main>
</body>

</html>