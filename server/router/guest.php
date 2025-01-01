<?php 
$router->addRoute('GET', '/', function() {
    include 'client/views/pages/guest/read-anonimo.php';
});

$router->addRoute('GET', '/read/{id}', function() {
    include_once('client/views/pages/guest/reading-anonimo.php');
});