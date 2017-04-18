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

Route::get('/{id}/{title}', 'HomeController@inside')->where(['id' => '[0-9]+']);

Route::get('/outside', function () {
    return view('outside');
});

/////////
//Login//
/////////

Route::get('/Homelogin', function () {
    return view('Login.home');
});

Route::get('/Login', function () {
    return view('Login.login');
});

Route::get('/QuanLyBaiViet', function () {
    return view('Login.tables');
});

Route::get('/GuiBaiMoi', function () {
    return view('Login.form_wizards');
});

Route::get('/nguyenlieu', function () {
    $nguyenlieu=App\DSNguyenlieu::All();
    $nguyenlieuchitiet=App\DSNguyenlieu::All();
    foreach ($nguyenlieuchitiet as $key) {
      return view('quanlynguyenlieu')->with('nguyenlieu',$nguyenlieu)->with('nguyenlieuchitiet',$key);
    }
    });

Route::get('/nguyenlieu/{id}', function ($id) {
  $nguyenlieu=App\DSNguyenlieu::All();
  $nguyenlieuchitiet=App\DSNguyenlieu::find(1)->where('id',$id)->get();
  foreach ($nguyenlieuchitiet as $key) {
    return view('quanlynguyenlieu')->with('nguyenlieu',$nguyenlieu)->with('nguyenlieuchitiet',$key);
  }
    });
