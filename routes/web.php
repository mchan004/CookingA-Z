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
  Route::get('/user', 'QuanlyController@home');

  Route::group(['prefix' => 'user'], function () {

        Route::get('QuanLyMonan', 'QuanlyMonanController@QuanlyMonan');

        Route::group(['prefix' => 'QuanLyMonan'], function () {
          Route::get('ThemMonan', 'QuanlyMonanController@showThemMonan');
          Route::post('ThemMonan', 'QuanlyMonanController@ThemMonan');
          Route::get('suaMonan/{id}', 'QuanlyMonanController@showsuaMonan');
          Route::post('suaMonan', 'QuanlyMonanController@suamMonan');

          Route::group(['middleware' => 'admin'], function () {
            Route::get('publish/{id}', 'QuanlyMonanController@publish');
            Route::get('unpublish/{id}', 'QuanlyMonanController@unpublish');
            Route::get('xoa/{id}', 'QuanlyMonanController@XoaMonan');
          });
        });

        Route::get('profile', function () {
            // Uses Auth Middleware
        });

  });
  ////////////
  //Bookmark//
  ////////////
  Route::get('/bookmark/{id}', 'AjaxController@AddBookmark');
  Route::get('/unbookmark/{id}', 'AjaxController@RemoveBookmark');
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
