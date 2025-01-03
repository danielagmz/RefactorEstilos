<?php 
namespace router;
// acciones 
$router->addRoute('GET', '/reading/{id}', function() {
    include_once('client/views/pages/user/reading.php');
});
$router->addRoute('GET', '/updating/{id}', function() {
    include_once('client/views/pages/user/updating.php');
});

$router->addRoute('GET', '/deleting/{id}', function() {
    include_once('client/views/pages/user/deleting.php');
});

// $router->addRoute('POST','/articles',function(){
    
// }); 
