<?php
$router->group(['namespace' => 'Mobile', 'prefix' => '/admin/mobile'], function () use ($router) {
    $router->post('/data', 'HomeController@getData');
});
