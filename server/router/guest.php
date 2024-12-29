<?php 
$router->addRoute('GET', '/', function() {
    include 'client/views/pages/guest/read-anonimo.php';
});

$router->addRoute('GET', '/login', function() {
    include 'client/views/auth/login.php';
});

$router->addRoute('GET', '/register', function() {
    include 'client/views/auth/register.php';
});