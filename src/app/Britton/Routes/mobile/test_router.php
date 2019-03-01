<?php
$router->group(['middleware' => ['cors'], 'namespace' => env('MOBILE_NAMESPACE'), 'prefix' => '/mobile'], function () use ($router) {

    $router->post('/consultation/getDetail', 'ContentsController@getDetail');//获取咨询详情
    $router->post('/consultation/getList', 'ContentsController@getList');//获取咨询列表

    $router->post('/consultationType/getList', 'CategoryController@getList');//获取咨询标签列表

    $router->post('/expert/detail', 'ExpertController@getDetail');//获取专家详情
});