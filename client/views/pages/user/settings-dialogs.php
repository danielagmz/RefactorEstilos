<dialog class="dialog dialog--change-pass">
    <div class="dialog__content">
        <button aria-label="tancar" class="dialog__close"><i class="fi fi-rr-cross"></i></button>
        <div class="content__body">
            <form id="changePasswordForm" method="post" class="form article">
                <div class="content__title">Canviar contrasenya</div>
                <div class="form__group">
                    <label for="oldPassword" class="form__label">Contrasenya actual</label>
                    <div class="input__group--pass">
                        <input type="password" id="oldPassword" name="oldPassword" class="form__input">
                        <i class="fi fi-rr-eye showme"></i>
                    </div>
                </div>
                <div class="form__group">
                    <label for="newPassword" class="form__label">Contrasenya nova</label>
                    <div class="input__group--pass">
                        <input type="password" id="newPassword" name="newPassword" class="form__input">
                        <i class="fi fi-rr-eye showme"></i>
                    </div>
                </div>
                <div class="form__group">
                    <label for="verifyPassword" class="form__label">Confirmar contrasenya</label>
                    <div class="input__group--pass">
                        <input type="password" id="verifyPassword" name="verifyPassword" class="form__input">
                        <i class="fi fi-rr-eye showme"></i>
                    </div>
                </div>
                <div id="responseContainer" class="response-container"></div>
                <input aria-label="canviar contrasenya" type="submit" value="Canviar contrasenya" class="form__button form__button--mark">
            </form>
        </div>
    </div>
</dialog>

<dialog class="dialog dialog--delete-account">
    <div class="dialog__content">
        <button aria-label="tancar" class="dialog__close"><i class="fi fi-rr-cross"></i></button>
        <div class="content__body">
            <form id="deleteAccountForm" method="post" class="form article">
                <div class="content__title center">Estas segur?</div>
                <div class="form__group">
                    <label for="password" class="form__label">Confirma la teva contrasenya</label>
                    <input type="password" id="password" name="password" class="form__input">
                </div>
                <div id="responseDelete" class="response-container"></div>
                <input aria-label="eliminar compte" type="submit" value="Eliminar compte" class="form__button banner__button--red">
                <hr>
                <div class="content__subtitle"><i class="fi fi-rr-comment-info banner__button--red"></i> Es mantindràn els teus articles pero no podras iniciar sessió</div>
            </form>
        </div>
    </div>
</dialog>

<dialog class="dialog dialog__upload--banner">
    <div class="dialog__content">
        <button aria-label="tancar" class="dialog__close"><i class="fi fi-rr-cross"></i></button>
        <div class="content__body">
            <form id="uploadBannerForm" method="post" class="form article" enctype="multipart/form-data">
                <div class="content__title">Cargar Banner</div>
                <div class="form__group">
                    <input aria-label="cargar banner" type="file" id="banner" name="banner" class="form__input" accept="image/*">
                    <div id="bannerPreviewContainer"></div>
                </div>

                <div id="uploadBannerResponse" class="response-container"></div>
                <input type="submit" value="Cargar imatge" class="form__button form__button--mark">
                <hr>
                <div class="content__subtitle"><i class="fi fi-rr-comment-info"></i> mida recomanada 1024x120px</div>
            </form>
        </div>
    </div>
</dialog>

<dialog class="dialog dialog__upload--avatar">
    <div class="dialog__content">
        <button aria-label="tancar" class="dialog__close"><i class="fi fi-rr-cross"></i></button>
        <div class="content__body">
            <form id="uploadAvatarForm" method="post" class="form article" enctype="multipart/form-data">
                <div class="content__title">Cargar Avatar</div>
                <div class="form__group">
                    <input aria-label="cargar avatar" type="file" id="avatar" name="avatar" class="form__input" accept="image/*">
                    <div id="avatarPreviewContainer"></div>
                </div>
                <div id="uploadAvatarResponse" class="response-container"></div>
                <input type="submit" value="Cargar imatge" class="form__button form__button--mark">
                <hr>
                <div class="content__subtitle"><i class="fi fi-rr-comment-info"></i> mida recomanada 200x200px</div>
            </form>
        </div>
    </div>
</dialog>