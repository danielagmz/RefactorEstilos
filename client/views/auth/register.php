<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('client/views/common/estilos.php') ?>
    <script type="module" src="client\public\javascripts\common\showme.js"></script>
    <title>Logar-se</title>
</head>

<body class="anonimo register">
    <div class="container">
        <?php $accion = 'Logar-se';
        $url = 'login';
        include_once('client/views/common/nav-anonimo.php') ?>
        <main class="content">
            <div class="content__title">Enregistrar-se</div>
            <div class="content__body content__body--30W">
                <form class="form article" action="<?= ROOT ?>/home" >
                    <div class="form__group">
                        <label class="form__label" for="username">Nom d'usuari</label>
                        <input class="form__input" value="<?= isset($username) ? $username : '' ?>" placeholder="patato123" type="text" name="username" id="username" required />
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="email">email</label>
                        <input class="form__input" value="<?= isset($email) ? $email : '' ?>" placeholder="patato123@correo.com" type="email" name="email" id="email" required />
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="password">Contrasenya</label>
                        <div class="input__group--pass">
                            <input class="form__input" value="<?= isset($password) ? $password : '' ?>" placeholder="••••••••" type="password" name="password" id="password" required />
                            <i tabindex="0" class="fi fi-rr-eye showme"></i>
                        </div>
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="verifypassword">Confirma la contrasenya</label>
                        <div class="input__group--pass">
                            <input class="form__input" placeholder="••••••••" type="password" name="verifypassword" id="verifypassword" required />
                            <i tabindex="0" class="fi fi-rr-eye showme"></i>
                        </div>
                    </div>
                    <?= isset($response) ? $response : ''   ?>
                    <div class="form__group">
                        <input class="form__button form__button--mark" type="submit" value="Engistrar-se" />
                        <div class="socialAuthOptions">
                            <a aria-label="register with Google" class="form__button form__button--mark socialAuth socialAuth__google" href=" //google_social_login_url() ?>"><i class="fi fi-brands-google"></i></a>
                            <a aria-label="register with Github" class="form__button form__button--mark socialAuth socialAuth__github" href=" //github_social_login_url() ?>"><i class="fi fi-brands-github"></i></a>
                        </div>
                    </div>

                </form>
            </div>
        </main>
    </div>
</body>

</html>