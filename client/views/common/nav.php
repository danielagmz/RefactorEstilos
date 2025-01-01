<div class="nav-grid">
    <aside class="menu">
        <a id="home" class="menu__item" href="<?= BASE_URL . 'home' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-home"></i>
            </div>
        </a>
        <?php if( isset($_SESSION['admin']) && $_SESSION['admin']): ?>
            <a id="admin" class="menu__item" href="<?= BASE_URL . 'users' ?>">
                <div class="menu__item-link">
                <i class="fi fi-rr-users-gear"></i>
                </div>
            </a>
        <?php endif; ?>
        <a id="all" class="menu__item" href="<?= BASE_URL . 'all' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-book-alt"></i>
            </div>
        </a>
        <a id="create" class="menu__item" href="<?= BASE_URL . 'create' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-add-document"></i>
            </div>
        </a>
        <a id="delete" class="menu__item" href="<?= BASE_URL . 'delete' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-delete-document"></i>
            </div>
        </a>
        <a id="update" class="menu__item" href="<?= BASE_URL . 'update' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-edit"></i>
            </div>
        </a>
        <a id="change_password" class="menu__item" href="<?= BASE_URL . 'settings' ?>">
            <div class="menu__item-link">
                <i class="fi fi-rr-settings"></i>
            </div>
        </a>
        <form action="index.php?action=logout" class="cursor--pointer" method="post">
            <button type="submit" class="button--logout menu__item">
                <div  class="menu__item ">
                    <i class="fi fi-rr-sign-out-alt"></i>
                </div>
            </button>
        </form>
    </aside>
</div>