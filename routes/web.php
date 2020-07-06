<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 路由文件加载
// 源码
// Illuminate\Foundation\Support\Providers\ServiceProvider 中的 boot方法

Route::get('/', function () {
    return view('welcome');
});



Route::get('foo', function () {
    return 'Hello World';
});

/*
// 运行不同的请求访问同一个方法
// 允许自定义的方式
Route::match(['get', 'post' , ""], '/', function () {

});
// 允许全部的访问方式
Route::any('foo', function () {

});
*/

// 根据某一些规则分组,前缀,中间件,命名空间
// Route::prefix('pre')->group(function () {
//     Route::get('/', function () {
//         return "pre ii ";
//     });
//
//     Route::get('user', function () {
//         return "pre ii  user";
//     });
// });
// Route::group(["prefix" =>"fix"],function () {
//     Route::get('/', function () {
//         return "fix ii ";
//     });
//
//     Route::get('user', function () {
//         return "fix ii  user";
//     });
// });



// 根据请求方式定义路由
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
