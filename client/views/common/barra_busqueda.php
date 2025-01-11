<div class="cabeceras">
   <div class="busqueda-barra content__body--row">
      <input type="text" list="busquedas" id="busqueda-barra__input" name="busqueda-barra__input" placeholder="Filtar por..." class="busqueda-barra__input" autofocus>
      <datalist id="busquedas">
         <!-- crear_datalist_user()?> -->
      </datalist>
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
            <input type="radio" class="ordenacion__input" id="asc" value="ASC" name="orden">
            <label for="asc" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-up"></i></label>

            <input type="radio" checked class="ordenacion__input" value="DESC" id="desc" name="orden">
            <label for="desc" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-down-alt"></i></i></label>
         </div>
      </div>
   </div>
</div>
