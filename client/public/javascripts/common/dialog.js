
/**
 * Inicializa un dialogo modal con un formulario y un contenedor para mostrar
 * respuestas.
 *
 * @param {Object} options - Opciones para inicializar el dialogo.
 * @param {string} options.dialogSelector - Selector para el dialogo.
 * @param {string} options.buttonIdentifier - Selector para el boton que abrir  el dialogo.
 * @param {string} options.formId - ID del formulario.
 * @param {string} options.submitUrl - URL a la que se enviar  el formulario.
 * @param {string} options.responseContainerId - ID del contenedor para mostrar respuestas.
 * @param {string} [options.redirect] - URL a la que se redirigir  si el formulario se envia correctamente.
 */
export function initDialog({ dialogSelector, buttonIdentifier, formId, submitUrl, responseContainerId, redirect }) {
    const dialog = document.querySelector(dialogSelector);
    const dialogClose = dialog.querySelector('.dialog__close');
    const form = document.getElementById(formId);
    const responseContainer = document.getElementById(responseContainerId);
    if (!dialog || !dialogClose || !form || !responseContainer) {
        console.error(`Elementos necesarios no encontrados. Verifica los selectores proporcionados: 
        dialog: ${dialog}, 
        dialogClose: ${dialogClose}, 
        form: ${form}, 
        responseContainer: ${responseContainer}`);
        return;
    }

    dialogClose.addEventListener('click', () => {
        dialog.close();
        resetForm(form, responseContainer);
    });

    window.addEventListener('click', (event) => {
        if (event.target === dialog) {
            dialog.close();
            resetForm(form, responseContainer);
        }
    });

    function resetForm(form, responseContainer) {
        form.reset();
        responseContainer.innerHTML = '';
    }

    function openDialog(buttonIdentifier) {
        const button = document.querySelector(`${buttonIdentifier}`);
        if (button) {
            button.addEventListener('click', () => {
                dialog.showModal();
            });
        }
    }

    openDialog(buttonIdentifier);

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        try {
            const response = await fetch(submitUrl, {
                method: 'POST',
                body: formData,
            });

            const result = await response.text();
            responseContainer.innerHTML = result;

            if (response.ok) {
                form.reset();
                if (redirect) {
                    window.location.href = redirect;
                }
            }


        } catch (error) {
            responseContainer.innerHTML = '<div class="form-info form-info--error">Ha ocurrido un error inesperado</div>';
        }
    });
}

export function initUploadDialog({ dialogSelector, buttonClass, formId, submitUrl, responseContainerId, redirect, cropWidth, cropHeight, previewContainerId }) {
    const dialog = document.querySelector(dialogSelector);
    const dialogClose = dialog.querySelector('.dialog__close');
    const form = document.getElementById(formId);
    const responseContainer = document.getElementById(responseContainerId);
    const avatarInput = form.querySelector('input[type="file"]');
    const previewContainer = document.getElementById(previewContainerId);
    let cropper;
    let croppedBlob;

    if (!dialog || !dialogClose || !form || !responseContainer || !avatarInput || !previewContainer) {
        console.error('Elementos necesarios no encontrados. Verifica los selectores proporcionados.');
        return;
    }

    dialogClose.addEventListener('click', () => {
        dialog.close();
        resetForm(form, responseContainer);
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
    });

    window.addEventListener('click', (event) => {
        if (event.target === dialog) {
            dialog.close();
            resetForm(form, responseContainer);
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
        }
    });

    function resetForm(form, responseContainer) {
        form.reset();
        responseContainer.innerHTML = '';
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
    }

    function openDialog(buttonClass) {
        const button = document.querySelector(`.${buttonClass}`);
        if (button) {
            button.addEventListener('click', () => {
                dialog.showModal();
            });
        }
    }

    openDialog(buttonClass);

    avatarInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = () => {
                // Crear el área de recorte
                const imagePreview = document.createElement('img');
                imagePreview.src = reader.result;
                previewContainer.innerHTML = '';  // Limpiar el contenedor previo
                previewContainer.appendChild(imagePreview);

                // Iniciar Cropper.js
                if (cropper) cropper.destroy();  // Destruir cropper anterior si existe
                cropper = new Cropper(imagePreview, {
                    aspectRatio: cropWidth / cropHeight, // Ajustar el aspecto
                    viewMode: 1,
                    autoCropArea: 1,
                    scalable: true,
                    zoomable: true,
                    movable: true,
                    rotatable: true,
                    responsive: true,
                });
            };
            reader.readAsDataURL(file);
        }
    });

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        if (cropper) {
            cropper.getCroppedCanvas({ width: cropWidth, height: cropHeight }).toBlob(async (blob) => {
                croppedBlob = blob;
                const formData = new FormData();
                formData.append('imagen', croppedBlob, 'image.jpg');

                try {
                    const response = await fetch(submitUrl, {
                        method: 'POST',
                        body: formData,
                    });

                    const result = await response.text();
                    responseContainer.innerHTML = result;

                    if (response.ok) {
                        form.reset();
                        if (redirect) {
                            window.location.href = redirect;
                        }
                    }
                } catch (error) {
                    responseContainer.innerHTML = '<div class="form-info form-info--error">Ha ocurrido un error inesperado</div>';
                }
            });
        } else {
            responseContainer.innerHTML = '<div class="form-info form-info--error">Por favor, selecciona y recorta una imagen.</div>';
        }
    });
}




