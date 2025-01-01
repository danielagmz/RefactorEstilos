<?php 
/**
 * Destruye la sesión actual y redirige a la pagina de inicio
 */
function logout() {
    session_start();

    guardar_cookie('remember', '', time() - 3600);
    // borrar_token('rememberTK',$_SESSION['id']);

    session_unset();
    session_destroy();
    
    echo sprintf('<script>location.href="%s"</script>', BASE_URL);
}
?>