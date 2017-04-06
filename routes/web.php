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


Route::get('/thucan',function(){

			return View::make('home');
});

Route::get('/inside',function(){

			return View::make('inside');
});

Route::get('/outside',function(){

			return View::make('outside');
});

Route::get('/dangky',function(){

			return View('dangky');
});

Route::get('/montrangmieng',function(){

			return View::make('monsub');
});
Route::get('/dangnhap',function(){

			return View('dangnhap');
});
Route::get('/banhtrangmieng',function(){

			return View::make('banhuc');
});
