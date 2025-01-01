<div class="cabeceras">
   <div class="busqueda-barra content__body--row">
      <input type="text" list="busquedas" value="<?= isset($_GET['filter']) ? $_GET['filter'] : '' ?>" name="busqueda-barra__input" placeholder="Filtar por..." class="busqueda-barra__input" autofocus>
      <datalist id="busquedas">
         <!-- crear_datalist_user()?> -->
      </datalist>
      <button class="busqueda-barra__button">
         <?php if (isset($userSearch) && $userSearch): ?>
            <i class="fi fi-rr-member-search"></i>
         <?php else: ?>
            <i class="fi fi-rr-search-alt"></i>
         <?php endif; ?>

      </button>
   </div>
   <div class="busqueda-barra cabeceras--paginacion">
      <select name="page" class="busqueda__input--page" id="page">
         <option value="4">4</option>
         <option value="8">8</option>
         <option value="12">12</option>
         <option value="16">16</option>
      </select>
      <div class="paginacion">
         <div class="paginacion__links"></div>
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