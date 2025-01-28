<!DOCTYPE html>
<html lang="ca">
<head>
    <!-- Daniela Gamez -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <!-- <script type="module" src="public/javascripts/update.js"></script>
    <script type="module" src="public/javascripts/filter.js"></script>
    <script type="module" src="public/javascripts/paginacion.js"></script> -->
    <title>Modificar article</title>
</head>
<body>
    <div class="container update">
    <?php include_once('client/views/common/nav.php') ?>
        
        <main class="content">
            <div class="content__title"> Selecciona l'article per modificar</div>
            <?php include_once('client/views/common/barra_busqueda.php') ?>
            <div class="busqueda__resultados"><article class="article" data-id="24"> 
                <div class="article__header">
                    <div class="article__icon"></div>
                    <div class="article__title">ඞ</div>
                </div>
                <p class="article__body">ඞ...</p>
                <div class="article__footer">
                    <span class="article__created"><i class="fi fi-rr-add-document icon"></i>2024-12-02 16:36:50</span>
                    <span class="article__author"><i class="fi fi-rr-user icon"></i>Pancracio</span>
                </div>
            </article><article class="article" data-id="17"> 
                <div class="article__header">
                    <div class="article__icon"></div>
                    <div class="article__title">Robótica en la Industria Moderna</div>
                </div>
                <p class="article__body">La robótica ha transformado el sector industrial, permitiendo una automatización avanzada en procesos de manufactura. Gracias a los robots, se ha logrado incrementar la eficiencia y reducir los cost...</p>
                <div class="article__footer">
                    <span class="article__created"><i class="fi fi-rr-add-document icon"></i>2024-10-13 19:56:20</span>
                    <span class="article__author"><i class="fi fi-rr-user icon"></i>roger_51</span>
                </div>
            </article><article class="article" data-id="15"> 
                <div class="article__header">
                    <div class="article__icon"></div>
                    <div class="article__title">Realidad Virtual en la Educación</div>
                </div>
                <p class="article__body">La realidad virtual (RV) está abriendo nuevas posibilidades en el ámbito educativo, proporcionando a los estudiantes experiencias de aprendizaje inmersivas. Imagina estudiar historia mientras camina...</p>
                <div class="article__footer">
                    <span class="article__created"><i class="fi fi-rr-add-document icon"></i>2024-10-13 19:56:20</span>
                    <span class="article__author"><i class="fi fi-rr-user icon"></i>anaisabel_82</span>
                </div>
            </article><article class="article" data-id="12"> 
                <div class="article__header">
                    <div class="article__icon"></div>
                    <div class="article__title">Nanotecnología: Un Mundo Invisible</div>
                </div>
                <p class="article__body">La nanotecnología está revolucionando campos como la medicina y la electrónica, permitiendo avances a nivel microscópico. Desde el desarrollo de nuevos materiales hasta la creación de tratamiento...</p>
                <div class="article__footer">
                    <span class="article__created"><i class="fi fi-rr-add-document icon"></i>2024-10-13 19:56:20</span>
                    <span class="article__author"><i class="fi fi-rr-user icon"></i>roger_51</span>
                </div>
            </article></div>
        </main>
    </div>
</body>
</html>