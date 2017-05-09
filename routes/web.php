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

Route::get('/{id}/{title}', 'HomeController@inside')->where('id', '[0-9]+');

Route::get('/monan', 'HomeController@outside');

Route::get('/monan/{tl}', 'HomeController@outside');

Route::get('/timmonan', 'HomeController@outside');

Route::post('/timmonan', 'HomeController@timmonan');

Route::get('/livesearchNguyenlieu/{nhap}', 'AjaxController@livesearchNguyenlieu');

Route::get('/livesearchNguyenlieuDatalist/{nhap}', 'AjaxController@livesearchNguyenlieuDatalist');

Route::get('/livesearchDungcuDatalist/{nhap}', 'AjaxController@livesearchDungcuDatalist');

Auth::routes();

/////////
//Login//
/////////

Route::group(['middleware' => 'auth'], function () {
  Route::get('/user', function () {
      return view('Login.home');
  });

  Route::group(['prefix' => 'user'], function () {

        Route::get('QuanLyMonan', 'QuanlyController@QuanlyMonan');

        Route::get('ThemMonan', 'QuanlyController@showThemMonan');

        Route::post('ThemMonan', 'QuanlyController@ThemMonan');

        Route::get('profile', function () {
            // Uses Auth Middleware
        });

  });
  ////////////
  //Bookmark//
  ////////////
  Route::post('bookmark', 'AjaxController@AddBookmark');
  Route::post('unbookmark', 'AjaxController@RemoveBookmark');
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
