<?php
$router->group(['namespace' => 'PcWeb', 'prefix' => '/britton'], function () use ($router) {
    $router->post('/test/pc', 'HomeController@testPC');
});
