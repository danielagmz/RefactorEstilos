<?php 
namespace controllers\core;
function app_error($error=404){
    http_response_code($error);
    include('views/errors/'.$error.'.php');
}

function route_error($error=404){
    http_response_code($error);
    include($error.'.php');
}