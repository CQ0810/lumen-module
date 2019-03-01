<?php
$router->group(['namespace' => 'Admin', 'prefix' => '/admin/britton'], function () use ($router) {
    $router->get('/test/index', 'HomeController@getCount');
});
