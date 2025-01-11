<?php

namespace router;

use controllers\shared\ArticlesController;
use Models\Article;

// acciones 
$router->addRoute('GET', '/reading/{id}', function () {
    include_once('client/views/pages/user/reading.php');
});
$router->addRoute('GET', '/updating/{id}', function () {
    include_once('client/views/pages/user/updating.php');
});

$router->addRoute('GET', '/deleting/{id}', function () {
    include_once('client/views/pages/user/deleting.php');
});

$router->addRoute('POST', '/api/articles', function() {
    $params= Router::getRequestBody();
    // var_dump($params);
    $articles = ArticlesController::getPaginatedArticles($params['limit'], $params['filter'], $params['order'],isset($params['qParams']['page'])?$params['qParams']['page']: 1,$params['pathName']);
    echo json_encode($articles);
});
