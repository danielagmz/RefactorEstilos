<?php 
$router->addRoute('GET', '/home', function() {
    include 'client/views/pages/user/read.php';
});