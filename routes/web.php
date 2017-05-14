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

Route::get('test',function () {
  $test=App\NguyenlieuMonan::find(2)->tenMonan->tenMonan;
  return $test;
});
Auth::routes();

/////////
//Login//
/////////
use Illuminate\Http\Request;
Route::group(['middleware' => 'auth'], function () {
  Route::get('/user', 'QuanlyController@home');

  Route::group(['prefix' => 'user'], function () {

        Route::get('QuanLyMonan', 'QuanlyMonanController@QuanlyMonan');

        Route::group(['prefix' => 'QuanLyMonan'], function () {
          Route::get('ThemMonan', 'QuanlyMonanController@showThemMonan');
          Route::post('ThemMonan', 'QuanlyMonanController@ThemMonan');
          Route::get('suaMonan/{id}', 'QuanlyMonanController@showsuaMonan');
          Route::post('suaMonan', 'QuanlyMonanController@suaMonan');

          Route::group(['middleware' => 'admin'], function () {
            Route::get('publish/{id}', 'QuanlyMonanController@publish');
            Route::get('unpublish/{id}', 'QuanlyMonanController@unpublish');
            Route::get('xoa/{id}', 'QuanlyMonanController@XoaMonan');
          });
        });
        Route::get('QuanLyNguyenLieuDungCu',function () {
          $monan=App\DSMonAn::paginate(5);
          $dungcu=App\DSDungCu::paginate(5);
          $nguyenlieu=App\DSNguyenLieu::paginate(5);
          $dungcumonan=App\DungcuMonan::paginate(5);
          $nguyenlieumonan=App\NguyenlieuMonAn::paginate(5);

          $monans=App\DSMonAn::All();
          $dungcus=App\DSDungCu::All();
          $nguyenlieus=App\DSNguyenLieu::All();
          $dungcumonans=App\DungcuMonan::All();
          $nguyenlieumonans=App\NguyenlieuMonAn::All();

          return view('Login.nlcc')->with(['monan'=>$monan,
                                            'dungcu'=>$dungcu,
                                            'nguyenlieu'=>$nguyenlieu,
                                            'dungcumonan'=>$dungcumonan,
                                            'nguyenlieumonan'=>$nguyenlieumonan,

                                            'monans'=>$monans,
                                            'dungcus'=>$dungcus,
                                            'nguyenlieus'=>$nguyenlieus,
                                            'dungcumonans'=>$dungcumonans,
                                            'nguyenlieumonans'=>$nguyenlieumonans,
                                          ]);
        })->name('nlcc-index');

        Route::group(['prefix' => 'QuanLyNguyenLieuDungCu'], function () {
          //nguyen lieu
          Route::post('nguyenlieu-store',function (Request $request) {
            $nguyenlieu=new App\DSNguyenLieu;
            $nguyenlieu->tenNguyenlieu=$request['tennguyenlieu'];
            $nguyenlieu->save();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieu-store');

          Route::post('nguyenlieu-update/{id}',function (Request $request,$id) {
            $nguyenlieu=App\DSNguyenLieu::find($id);
            $nguyenlieu->tenNguyenlieu=$request['tennguyenlieu'];
            $nguyenlieu->save();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieu-update');

          Route::get('nguyenlieu-destroy/{id}',function ($id) {
            $nguyenlieu=App\DSNguyenLieu::find($id)->delete();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieu-destroy');

          //dungcu
            Route::post('dungcu-store',function (Request $request) {
              $nguyenlieu=new App\DSDungcu;
              $nguyenlieu->tenDungcu=$request['tendungcu'];
              $nguyenlieu->save();
              return redirect()->route('nlcc-index');
            })->name('dungcu-store');

            Route::post('dungcu-update/{id}',function (Request $request,$id) {
              $nguyenlieu=App\DSDungcu::find($id);
              $nguyenlieu->tenDungcu=$request['tendungcu'];
              $nguyenlieu->save();
              return redirect()->route('nlcc-index');
            })->name('dungcu-update');

            Route::get('dungcu-destroy/{id}',function ($id) {
              $nguyenlieu=App\DSDungcu::find($id)->delete();
              return redirect()->route('nlcc-index');
            })->name('dungcu-destroy');

        //nguyen lieu mon an
          Route::post('nguyenlieumonan-store',function (Request $request) {
            $nguyenlieumonan=new App\NguyenlieuMonan;
            $nguyenlieumonan->idMonan=$request['idmonan'];
            $nguyenlieumonan->idNguyenlieu=$request['idnguyenlieu'];
            $nguyenlieumonan->soluong=$request['soluong'];
            $nguyenlieumonan->donvi=$request['donvi'];
            $nguyenlieumonan->save();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieumonan-store');

          Route::post('nguyenlieumonan-update/{id}',function (Request $request,$id) {
            $nguyenlieumonan=App\NguyenlieuMonan::find($id);
            $nguyenlieumonan->idMonan=$request['idmonan'];
            $nguyenlieumonan->idNguyenlieu=$request['idnguyenlieu'];
            $nguyenlieumonan->soluong=$request['soluong'];
            $nguyenlieumonan->donvi=$request['donvi'];
            $nguyenlieumonan->save();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieumonan-update');

          Route::get('nguyenlieumonan-destroy/{id}',function ($id) {
            $nguyenlieumonan=App\NguyenlieuMonan::find($id)->delete();
            return redirect()->route('nlcc-index');
          })->name('nguyenlieumonan-destroy');

          //dungcu mon an
            Route::post('dungcumonan-store',function (Request $request) {
              $nguyenlieumonan=new App\DungcuMonan;
              $nguyenlieumonan->idMonan=$request['idmonan'];
              $nguyenlieumonan->idDungCu=$request['iddungcu'];
              $nguyenlieumonan->save();
              return redirect()->route('nlcc-index');
            })->name('dungcumonan-store');

            Route::post('dungcumonan-update/{id}',function (Request $request,$id) {
              $nguyenlieumonan=App\DungcuMonan::find($id);
              $nguyenlieumonan->idMonan=$request['idmonan'];
              $nguyenlieumonan->idDungCu=$request['iddungcu'];
              $nguyenlieumonan->save();
              return redirect()->route('nlcc-index');
            })->name('dungcumonan-update');

            Route::get('dungcumonan-destroy/{id}',function ($id) {
              $nguyenlieumonan=App\DungcuMonan::find($id)->delete();
              return redirect()->route('nlcc-index');
            })->name('dungcumonan-destroy');
          });
        });


  ////////////
  //Bookmark//
  ////////////
  Route::get('/bookmark/{id}', 'AjaxController@AddBookmark');
});

Route::post('/comment', 'HomeController@comment');
