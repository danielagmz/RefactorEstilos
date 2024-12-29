<?php
http_response_code(404); // Establece el código de respuesta a 404
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<main class="content">
    <div class="content__body">
        <img class="article img" style="height: 76vh;" src="client/public/assets/images/404.jpg" alt="not found">
        <a href="<?php echo BASE_URL ?>" class="form__button form__button--mark">Tornar</a>
    </div>
</main>
</body>
</html>