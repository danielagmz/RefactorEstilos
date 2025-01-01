<?php 
$router->addRoute('GET', '/login', function() {
    include 'client/views/auth/login.php';
});

$router->addRoute('GET', '/register', function() {
    include 'client/views/auth/register.php';
});