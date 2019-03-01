<?php
$router->group(['namespace' => env('PC_WEB_NAMESPACE'), 'prefix' => '/'], function () use ($router) {
    $router->post('/test/pc', 'TestController@testPC');
    $router->post('/test/login', 'TestController@login');
    $router->get('/test/generateDoc', 'TestController@generateDoc');
    $router->post('/test/single', 'TestController@single');
    $router->post('/test/mongo', 'TestController@mongo');
    $router->get('/test/sms', 'TestController@sms');
    $router->get('/test/verifySMS', 'TestController@verifySMS');
    $router->get('/test/create-article', ['middleware' => ['permission:create-articles'], 'uses' => 'TestController@createArticle', 'as' => 'create_article']);
    $router->get('/test/update-article', ['middleware' => ['permission:update-articles'], 'uses' => 'TestController@updateArticle', 'as' => 'update_article']);
    $router->get('/test/edit-article', ['middleware' => ['permission:edit-articles'], 'uses' => 'TestController@editArticle', 'as' => 'edit_article']);
    $router->get('/test/delete-article', ['middleware' => ['permission:delete-articles'], 'uses' => 'TestController@deleteArticle', 'as' => 'delete_article']);
});