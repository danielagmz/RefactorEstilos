<div class="cabeceras">
   <div class="busqueda-barra content__body--row">
      <input type="text" list="busquedas" value="<?= isset($_GET['filter']) ? $_GET['filter'] : '' ?>" name="busqueda-barra__input" placeholder="Filtar por..." class="busqueda-barra__input" autofocus>
      <datalist id="busquedas">
         <!-- crear_datalist_user()?> -->
      </datalist>
      <button class="busqueda-barra__button">
         <i class="fi fi-rr-search-alt"></i>
      </button>
   </div>
   <div class="busqueda-barra cabeceras--paginacion">
      <!-- articles_pagina_user() ?> -->
      <div class="paginacion">
         <div class="paginacion__links">
            <!-- crear_links(
               isset($_GET['limit']) ? $_GET['limit'] : LIMIT, // Si no hay límite usa 4
               isset($_GET['page']) ? $_GET['page'] : PAGE, // Si no hay página, usa 1
               isset($_GET['filter']) ? $_GET['filter'] : '', // Si no hay filtro usa el filtro vacio
               isset($_GET['action']) ? $_GET['action'] : 'read',
               isset($_GET['order']) ? $_GET['order'] : ORDER
            ) ?> -->
         </div>

      </div>
      <div class="cabeceras--ordenacion ordenacion">
         <div class=" content_subtitle content__body--row">
            <input type="radio" class="ordenacion__input" id="asc" value="asc" name="orden">
            <label for="asc" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-up"></i></label>

            <input type="radio" checked class="ordenacion__input" value="desc" id="desc" name="orden">
            <label for="desc" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-down-alt"></i></i></label>
         </div>
      </div>
   </div>

</div>