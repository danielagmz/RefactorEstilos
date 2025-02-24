<div class="nav-grid">
    <aside class="menu">
        <a tabindex="0" class="menu__item" href="<?= BASE_URL ?>">
            <div class="menu__item-link">
                <i class="fi fi-tc-home"></i>
                <div class="menu__item-text">Inici</div>
            </div>
        </a>
        <a tabindex="0" id="actionButton" class="menu__item" href="<?= BASE_URL . (isset($url) ? $url : 'login') ?>">
            <div class="menu__item-link">
                <i class="fi fi-tc-sign-in-alt"></i>
                <div class="menu__item-text"><?= isset($accion) ? $accion : 'Logar-se / Enregistrar-se' ?></div>
            </div>
        </a>
    </aside>
</div>