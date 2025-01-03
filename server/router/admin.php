<?php 
namespace router;
$router->addRoute('GET', '/users', function() {
    include_once('client/views/admin/user-list.php');
});