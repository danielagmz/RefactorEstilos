<?php
require_once 'server/lib/vendor/autoload.php';
require_once 'server/router/Router.php';
require_once 'server/controllers/env.php';
require_once 'server/controllers/core/utils.php';

// Crear instancia del router
$router = new Router();

// Registrar rutas
// todo si esta registrado se incluye user, si ademas es admin se incluye admin si no se incluye guest
require_once 'server/router/guest.php';
require_once 'server/router/user.php';
require_once 'server/router/admin.php';

// Obtener método y URI de la solicitud
$requestMethod = $_SERVER['REQUEST_METHOD'];

$relativeUri = str_replace(ROOT, '', $_SERVER['REQUEST_URI']);
$relativeUri = strtok($relativeUri, '?'); 
// Despachar la solicitud
$router->dispatch($requestMethod, $relativeUri);