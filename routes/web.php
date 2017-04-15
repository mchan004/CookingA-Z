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

Route::get('/', 'HomeController@index');

Route::get('/inside', function () {
    return view('inside');
});

Route::get('/outside', function () {
    return view('outside');
});

/////////
//Admin//
/////////

Route::get('/Administrator', function () {
    return view('AdminPages.home');
});

Route::get('/Login', function () {
    return view('AdminPages.login');
});

Route::get('/QuanLyBaiViet', function () {
    return view('AdminPages.tables');
});

Route::get('/GuiBaiMoi', function () {
    return view('AdminPages.form_wizards');
});
