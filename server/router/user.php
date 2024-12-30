<?php 
$router->addRoute('GET', '/home', function() {
    include 'client/views/pages/user/read.php';
});

$router->addRoute('GET', '/all', function() {
    include 'client/views/pages/user/readAll.php';
});

$router->addRoute('GET', '/create', function() {
    include 'client/views/pages/user/create.php';
});

$router->addRoute('GET', '/delete', function() {
    include 'client/views/pages/user/delete.php';
});

$router->addRoute('GET', '/update', function() {
    include 'client/views/pages/user/update.php';
});

$router->addRoute('GET', '/settings', function() {
    include 'client/views/pages/user/settings.php';
});