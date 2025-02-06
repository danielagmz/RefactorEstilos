<!DOCTYPE html>
<html lang="ca">

<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
  
    <title>Insertar article</title>
</head>

<body>
    <div class="container">
    <?php include_once('client/views/common/nav.php') ?>

        <main class="content">
            <div class="content__title">El teu nou article</div>
            <div class="content__body">
                <form class="form article">
                    <div class="form__group">
                        <label for="title" class="form__label">Titol</label>
                        <input id="title" type="text" name="title" class="form__input" placeholder="Hi havia una vegada..." value="<?= isset($title) ? $title : '' ?>">
                    </div>
                    <div class="form__group">
                        <label for="content" class="form__label">Contingut</label>
                        <textarea id="content" name="content" class="form__textarea" maxlength="2504" placeholder="<?= isset($content) && $content ? '' : 'Un article gloriós...'; ?>"><?= isset($content) ? $content : '' ?></textarea>
                    </div>
                    <?= isset($response) ? $response : ''   ?>
                    <?= isset($button) ? $button : '' ?>
                    <input type="submit" value="Insertar" class="form__button form__button--mark">
                </form>
            </div>
        </main>
    </div>
</body>

</html>