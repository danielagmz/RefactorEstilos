<?php

namespace router;

use controllers\core\ErrorhandlerTrait;
use models\entities\Request;
class Router
{
    use ErrorhandlerTrait;
    private $routes = [];


    // Método para registrar rutas
    public function addRoute($method, $path, $callback)
    {
        $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[^/]+)', $path);
        $pattern = "#^" . $pattern . "$#";
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'pattern' => $pattern,
            'callback' => $callback
        ];
    }

    // Método para manejar las solicitudes
    public function dispatch($requestMethod, $requestUri)
    {

        foreach ($this->routes as $route) {
            if ($route['method'] === strtoupper($requestMethod) && preg_match($route['pattern'], $requestUri, $matches)) {

                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                $callback = $route['callback'];
                if (is_callable($callback)) {
                    $callback($params);
                }
                return;
            }
        }

        // Si no se encuentra la ruta
        $this->route_error(404);
    }

    public static function getRequestBody()
    {
        $rawBody = file_get_contents('php://input');

        // Intentar decodificarlo como JSON
        $body = json_decode($rawBody, true);

        // Devolver el contenido decodificado o vacío si no es JSON válido
        return $body ?? [];
    }
}
