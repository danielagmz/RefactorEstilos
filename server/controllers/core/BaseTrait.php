<?php

namespace controllers\core;

trait BaseTrait
{
    public static function borrar_cookie($nombre)
    {
        setcookie($nombre, "", time() - 3600);
    }

    public static function test_input($data)
    {
        //elimina espacios 
        $data = trim($data);
        //convierte caracteres especiales
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function url($path = '', $query_params = [])
    {
        // Construimos la URL base con el path opcional
        $url = BASE_URL . ltrim($path, '/');

        // Si hay parámetros de consulta, los añadimos
        if (!empty($query_params)) {
            $url .= '?' . http_build_query($query_params);
        }

        return $url;
    }
    
}
