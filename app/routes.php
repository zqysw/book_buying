<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//index

Route::get('/', 'index@index');						//首页

Route::post('/like', 'index@like');					//点赞链接

Route::post('/dislike', 'index@dislike');			//反对链接

Route::post('/comment', 'index@comment');			//评论提交

//commit

Route::get('/analyse', 'recommend@analyse');		//解析目标网站URL

Route::post('/commit', 'recommend@commit');			//提交推荐书目

//personal

Route::get('/personal', 'personal@index');			//个人管理页面

Route::post('/personal/update', 'personal@update');	//更新书目信息

//admin

Route::get('/admin', 'admin@index');				//管理员页面

Route::post('/admin/update', 'admin@update');		//更新管理信息