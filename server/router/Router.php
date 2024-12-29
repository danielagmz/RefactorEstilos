<?php

class Router {
    private $routes = [];


    // Método para registrar rutas
    public function addRoute($method, $path, $callback) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'callback' => $callback
        ];
    }

    // Método para manejar las solicitudes
    public function dispatch($requestMethod, $requestUri) {

        foreach ($this->routes as $route) {
            if ($route['method'] === strtoupper($requestMethod) && $route['path'] === $requestUri) {
                // Ejecutar la función o controlador asociado
                $callback = $route['callback'];

                if (is_callable($callback)) {
                    // Si es una función o método estático, llámalo directamente
                    call_user_func($callback);
                } elseif (is_array($callback) && count($callback) === 2) {
                    // Si es un controlador [Clase, método]
                    [$class, $method] = $callback;

                    if (class_exists($class)) {
                        $controller = new $class(); // Crear instancia
                        if (method_exists($controller, $method)) {
                            call_user_func([$controller, $method]);
                        } else {
                            echo "Método '$method' no encontrado en la clase '$class'.";
                        }
                    } else {
                        echo "Clase '$class' no encontrada.";
                    }
                } else {
                    echo "Callback no válido.";
                }
                return;
            }
        }

        // Si no se encuentra la ruta
        route_error(404);
    }

    function getRoutes() {
        return $this->routes;
    }

}


