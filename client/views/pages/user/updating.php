<!DOCTYPE html>
<html lang="ca">

<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <script type="module" src="public/javascripts/update.js"></script>
    <title>Modificar article</title>
</head>

<body>
    <div class="container">
    <?php include_once('client/views/common/nav.php') ?>

        <main class="content">
            <div class="content__title"> Modificant <?= isset($title) ? $title : 'l\'article' ?></div>
            <div class="content__body">
                <form action="" method="post" class="form article">
                    <div class="form__group">
                        <label for="title" class="form__label">Titol</label>
                        <input type="text" id="title" name="title" class="form__input" value="">
                    </div>
                    <div class="form__group">
                        <label for="content" class="form__label">Contingut</label>
                        <textarea name="content" id="content" class="form__textarea" maxlength="200"></textarea>
                    </div>
                    <div id="responseContainer" class="response-container"></div>
                    <input type="submit" value="Modificar" class="form__button form__button--mark">
                </form>
            </div>
        </main>
    </div>
</body>

</html>