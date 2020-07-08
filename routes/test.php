<?php
// laravel对于所有需要通过访问 执行的方法,必须定义路由
// Route::get('index', "控制的地址@方法名");
Route::get('index', "IndexController@index");
Route::get('goods/index', "Goods\GoodsController@index");

Route::get('us/index', "Us@index");

Route::resource('user', 'UserController');

Route::get('test', function () {
    return view('test/test');// 告诉laravel我要访问的视图
});

//Route::get('index/age/','IndexController@index')->middleware('CheckAge');


Route::get('test/test', "TestController@test");
Route::get('test/test1', "TestController@test1");