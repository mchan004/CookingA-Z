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

Route::get('/livesearchNguyenlieu/{nhap}', 'HomeController@livesearchNguyenlieu');



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

Route::get('test', function () {
  $danhmuc=App\DSMonan::find(1)->categorie1;
  //App\Categories::find(1)->monan;
  return $danhmuc;
    //return view('Login.form_wizards');
});
use Illuminate\Http\Request;
// Vũ làm
Route::get('quanly', function () {
    return view('Login.home');
});
Route::resource('quanly/monan', 'monanController');

Route::group(['prefix' => 'quanly'], function () {
  Route::get('danhmuc-index','danhmucController@index')->name('danhmuc-index');
  Route::post('danhmuc-store','danhmucController@store')->name('danhmuc-store');
  Route::post('danhmuc-update/{id}','danhmucController@update')->name('danhmuc-update');
  Route::get('danhmuc-destroy/{id}','danhmucController@destroy')->name('danhmuc-destroy');
});

Route::group(['prefix' => 'quanly'], function () {
  Route::get('nguyenlieu-dungcu-index',function () {
    $monan=App\DSMonAn::paginate(5);
    $dungcu=App\DSDungCu::paginate(5);
    $nguyenlieu=App\DSNguyenLieu::paginate(5);
    $dungcumonan=App\DungcuMonan::paginate(5);
    $nguyenlieumonan=App\NguyenlieuMonAn::paginate(5);
    return view('Login.nlcc')->with(['monan'=>$monan,
                                      'dungcu'=>$dungcu,
                                      'nguyenlieu'=>$nguyenlieu,
                                      'dungcumonan'=>$dungcumonan,
                                      'nguyenlieumonan'=>$nguyenlieumonan,
                                    ]);
  })->name('nlcc-index');
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
