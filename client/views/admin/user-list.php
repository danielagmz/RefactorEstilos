<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <!-- <script type="module" src="public/javascripts/activePage.js"></script>
    <script type="module" src="public/javascripts/filter.js"></script>
    <script type="module" src="public/javascripts/paginacion.js"></script>
    <script type="module" src="public/javascripts/dialog.js"></script> -->
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php include_once('client/views/common/nav.php') ?>
        <dialog class="dialog dialog__delete-user">
            <div class="dialog__content">
                <button class="dialog__close"><i class="fi fi-rr-cross"></i></button>
                <div class="content__body">
                    <form id="DeletUserForm" method="post" class="form article" enctype="multipart/form-data">
                        <div class="content__title">Estas segur?</div>
                        <div class="form__group">
                            <input type="hidden" id="id" name="id" class="form__input" value="">
                        </div>
                        <div id="deletUserResponse" class="response-container"></div>
                        <input type="submit" value="Eliminar" class="form__button form__button--mark">
                    </form>
                </div>
            </div>
        </dialog>
        <main class="content">
            <div class="content__title">Gestió d'usuaris</div>
            <?php 
            $userSearch = true;
            include_once('client/views/common/barra_busqueda.php');
            ?>
            <div class="content__body--table article">
                <table class="user-table">
                    <thead>
                        <tr class="user-table__header">
                            <th><i class="fi fi-rr-user"></i> Usuari</th>
                            <th><i class="fi fi-rr-user-add"></i> Creació</th>
                            <th><i class="fi fi-rr-user-pen"></i> Actualització</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>