<?php
$router->group(['namespace' => env('ADMIN_NAMESPACE'), 'middleware' => ['cors'],'prefix' => '/admin/contents'], function () use ($router) {
    $router->get('/test/index', 'TestController@testFront');

    $router->post('consultation/getList', 'ContentsController@getList');//咨询集合
    $router->post('consultation/add', 'ContentsController@add');//添加咨询
    $router->post('consultation/getDetail', 'ContentsController@getDetail');//咨询详情
    $router->post('consultation/del', 'ContentsController@del');//删除咨询
    $router->post('consultation/isNo', 'ContentsController@isNo');//咨询禁用、启用
    $router->post('consultation/update', 'ContentsController@update');//修改咨询


    $router->post('consultationType/getList', 'CategoryController@getList');//查询咨询标签
    $router->post('consultationType/add', 'CategoryController@add');//添加咨询标签
    $router->post('consultationType/del', 'CategoryController@del');//删除咨询标签
    $router->post('consultationType/update', 'CategoryController@update');//修改咨询标签
    $router->post('consultationType/isNo', 'CategoryController@isNo');//修改咨询标签
    $router->post('consultationType/detail', 'CategoryController@detail');//修改咨询标签

    $router->post('expert/getList', 'UserController@getList');//查询专家集合
    $router->post('expert/add', 'UserController@add');//添加专家
    $router->post('expert/update', 'UserController@update');//修改专家
    $router->post('expert/detail', 'UserController@details');//专家详请
    $router->post('expert/delete', 'UserController@del');//批量删除
    $router->post('expert/isNo', 'UserController@isNo');//是否启用


    $router->post('home/getCount', 'HomeController@getCount');//首页统计
});
