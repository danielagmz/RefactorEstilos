<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
    <script type="module" src="client\public\javascripts\common\showme.js"></script>
    <title>Logar-se</title>
</head>

<body class="anonimo">
    <div class="container">
        <?php $accion = 'Enregistrar-se';
        $url = 'register';
        include_once('client/views/common/nav-anonimo.php') ?>
        <main class="content">
            <div class="content__title">Logar-se</div>
            <div class="content__body content__body--30W">
                <form class="form article" action="<?= ROOT ?>/home">
                    <div class="form__group">
                        <label class="form__label" for="username">Username</label>
                        <input class="form__input" value="<?= isset($username) ? $username : '' ?>" placeholder="patato123" type="text" name="username" id="username" required />
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="password">Password</label>
                        <div class="input__group--pass">
                            <input class="form__input" value="<?= isset($password) ? $password : '' ?>" placeholder="••••••••" type="password" name="password" id="password" required />
                            <i tabindex="0" class="fi fi-rr-eye showme"></i>
                        </div>

                    </div>
                    <?= isset($catcha) && $catcha != 'default' ? $catcha : '' ?>
                    <div class="checkbox-wrapper">
                        <input  type="checkbox" name="remember" class="check" id="check1-61">
                        <label tabindex="0" for="check1-61" class="label">
                            <svg width="45" height="45" viewBox="0 0 95 95">
                                <rect x="30" y="20" width="50" height="50" stroke="black" fill="none"></rect>
                                <g transform="translate(0,-952.36222)">
                                    <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4" stroke="black" stroke-width="3" fill="none" class="path1"></path>
                                </g>
                            </svg>
                            <span  >Recordar-me</span>
                        </label>
                        
                    </div>
                    <?= isset($response) ? $response : ''   ?>
                    <div class="form__group">
                        <input class="form__button form__button--mark margin0" type="submit" value="Logar-se" />
                        <div class="socialAuthOptions">
                            <a aria-label="Login with Google" class="form__button form__button--mark socialAuth socialAuth__google" href=" //google_social_login_url() ?>"><i class="fi fi-brands-google"></i></a>
                            <a aria-label="Login with Github" class="form__button form__button--mark socialAuth socialAuth__github" href=" //github_social_login_url() ?>"><i class="fi fi-brands-github"></i></a>
                        </div>
                    </div>
                    <?php if(isset($socialLogged) && !$socialLogged):?>
                    <div class="form__group center">
                        <a aria-label="recuperar contrasenya" class="recover" href="index.php?action=recover_account">He oblidat la contrasenya</a>
                    </div>
                    <?php endif; ?>
                </form>
            </div>
        </main>
    </div>
</body>

</html>