<div class="nav-grid">
    <aside class="menu">
        <a tabindex="1" aria-label="Home" id="home" class="menu__item" href="<?= BASE_URL . 'home' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-home"></i>
            </div>
        </a>
        <?php if( isset($_SESSION['admin']) && $_SESSION['admin']): ?>
            <a tabindex="2" aria-label="lista de usuaris" id="admin" class="menu__item" href="<?= BASE_URL . 'users' ?>">
                <div class="menu__item-link">
                <i class="fi fi-rr-users-gear"></i>
                </div>
            </a>
        <?php endif; ?>
        <a tabindex="3" aria-label="Todos los articulos" id="all" class="menu__item" href="<?= BASE_URL . 'all' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-book-alt"></i>
            </div>
        </a>
        <a tabindex="4" aria-label="Crear un nuevo articulo" id="create" class="menu__item" href="<?= BASE_URL . 'create' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-add-document"></i>
            </div>
        </a>
        <a tabindex="5" aria-label="Borrar un articulo" id="delete" class="menu__item" href="<?= BASE_URL . 'delete' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-delete-document"></i>
            </div>
        </a>
        <a tabindex="6" aria-label="Actualizar un articulo" id="update" class="menu__item" href="<?= BASE_URL . 'update' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-edit"></i>
            </div>
        </a>
        <a tabindex="7" aria-label="ajustes" id="change_password" class="menu__item" href="<?= BASE_URL . 'settings' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-settings"></i>
            </div>
        </a>
        <a tabindex="8" href="<?= BASE_URL ?>" class="cursor--pointer" >
            <button  aria-label="cerrar sesion"  type="submit" class="button--logout menu__item">
                <div  class="menu__item ">
                    <i class="fi fi-rr-sign-out-alt"></i>
                </div>
            </button>
        </a>
    </aside>
</div>