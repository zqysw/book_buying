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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/master', function(){
	return View::make('layouts.master');
});
Route::get('/book_recommend.blade.php',function(){
	return View::make('layouts.book_recommend');
});
Route::get('/show_books.blade.php',function(){
	return View::make('layouts.show_books');
});

