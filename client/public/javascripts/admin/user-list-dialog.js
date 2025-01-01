if (document.querySelector('.dialog__delete-user')) {
    const dialogSelector = '.dialog__delete-user';
    const formId = 'deleteUserForm';
    const responseContainerId = 'deleteUserResponse';

    // Agregar eventos a cada botón de usuario
    document.querySelectorAll('button[id^="user-"]').forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.id.split('-')[1]; // Obtener el ID del usuario

            // Configurar la URL dinámica para la solicitud
            const submitUrl = `index.php?action=delete__user`;

            // Configurar dinámicamente el campo oculto del formulario
            const hiddenInput = document.querySelector(`#user-id`);
            if (hiddenInput) {
                hiddenInput.value = id;
            }

            // Inicializar el diálogo con los datos dinámicos
            initDialog({
                dialogSelector,
                buttonIdentifier: `#${button.id}`, // Identificar el botón que activa el diálogo
                formId,
                submitUrl,
                responseContainerId,
                redirect: 'index.php?action=admin'
            });

            // Mostrar el diálogo
            const dialog = document.querySelector(dialogSelector);
            if (dialog) dialog.showModal();
        });
    });
}