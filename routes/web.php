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

Route::get('/', function () {
    return view('welcome');
});

// 后台控制器
Route::group([],function(){
	// 后台首页
	Route::get('/admin','Admin\AdminController@index');
	//后台管理员权限
	Route::resource('/admins','Admin\AdminsController');
});