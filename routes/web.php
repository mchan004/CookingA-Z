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
use Illuminate\Http\Request;
Route::get('/', 'HomeController@index');

Route::get('/{id}/{title}', 'HomeController@inside')->where(['id' => '[0-9]+']);

Route::get('/outside', function () {
    return view('outside');
});

Route::get('/monan', function () {
  $monan=App\DSMonan::All();
  $monanchitiet=new App\DSMonan;
  return view('quanly')->with('monan',$monan)->with('monanchitiet',$monanchitiet);
});

Route::get('/monan/{id}', function ($id) {
  $monan=App\DSMonan::All();
  $monanchitiet=App\DSMonan::where('id',$id)->get();
    foreach ($monanchitiet as $key) {
      return view('quanly')->with('monan',$monan)->with('monanchitiet',$key);
    }
});

Route::post('/capnhatmonan/{id}', function (Request $request,$id) {
    $monan=App\DSMonan::find($id);

    $monan->tenMonan=$request['tenMonan'];
    $monan->categorie=$request['categorie'];
    $monan->level=$request['level'];
    $monan->nhaTaitro=$request['nhataitro'];
    $monan->gioithieu=$request['gioithieu'];
    $monan->hinhMinhhoa=$request['hinhminhhoa'];
    $monan->origin=$request['origin'];
    $monan->thoigian=$request['thoigian'];
    $monan->dokho=$request['dokho'];
    $monan->video=$request['video'];
    $monan->huongdan=$request['huongdan'];
    $monan->nguon=$request['nguon'];
    $monan->hits=$request['hits'];
    $monan->publish=$request['publish'];

    $monan->save();
    $ketqua="Cập nhật thành công";
    return $ketqua;
});

Route::get('/them', function () {
    $monan=new App\DSMonan;
    $monan->tenMonan="0";
    $monan->categorie="1";
    $monan->level="0";
    $monan->nhaTaitro="0";
    $monan->gioithieu="0";
    $monan->hinhMinhhoa="0";
    $monan->origin="0";
    $monan->thoigian="0";
    $monan->dokho="0";
    $monan->video="0";
    $monan->huongdan="0";
    $monan->nguon="0";
    $monan->hits="0";
    $monan->publish="0";
    $monan->createby="1";

    $monan->save();

    $monan=App\DSMonan::All();
    $monanchitiet=new App\DSMonan;
    return view('quanly')->with('monan',$monan)->with('monanchitiet',$monanchitiet);
});

Route::get('/xoa/{id}', function ($id) {
    $monan=App\DSMonan::find($id);
    $monan->delete();
});

Route::auth();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
