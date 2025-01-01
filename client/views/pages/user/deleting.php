<!DOCTYPE html>
<html lang="ca">

<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <title>Esborrar Article</title>
</head>

<body>
    <div class="container">
    <?php include_once('client/views/common/nav.php') ?>
        <main class="content">
            <div class="content__title">Estas segur?</div>
            <div class="content__body--row">
                <!-- formulario con campos deshabilitados -->
                <form action="" method="post" class="form article">
                    <div class="form__group">
                        <label for="title" class="form__label">Titol</label>
                        <input disabled type="text" id="title" name="title" class="form__input" value="<?= isset($title) ? $title: '' ?>">
                    </div>
                    <div class="form__group">
                        <label for="content" class="form__label">Contingut</label>
                        <textarea disabled name="content" id="content" class="form__textarea" required maxlength="200"><?= isset($content) ? $content: '' ?></textarea>
                    </div>
                    <div id="responseContainer" class="response-container"></div>
                    <input type="submit" value="Esborrar" class="form__button form__button--mark" id="deleteBtn">
                    
                </form>
                
            </div>
        </main>
    </div>
</body>

</html>