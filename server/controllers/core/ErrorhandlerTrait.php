<?php 

namespace controllers\core;
trait ErrorhandlerTrait {
    public function app_error($error=404){
        http_response_code($error);
        include('views/errors/'.$error.'.php');
    }
    
    public function route_error($error=404){
        http_response_code($error);
        include($error.'.php');
    }
}