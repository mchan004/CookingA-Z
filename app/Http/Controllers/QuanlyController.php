<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;
use App\DungcuMonan;
use App\DSDungcu;
use Illuminate\Support\Facades\Auth;

class QuanlyController extends Controller
{
  public function QuanlyMonan()
  {
    $DSMonan = DB::table('DSMonan')->orderBy('id')->get();

    return view('Login.quanlymonan', ['DSMonan' => $DSMonan]);
  }
  public function showThemMonan()
  {
      return view('Login.chinhsuamonan');
  }

  public function ThemMonan(Request $request)
  {

    $validator = Validator::make($request->all(), [
        'tenMonan' => 'required|min:5',
        'categorie' => 'required',
        'hinhMinhhoa' => 'required|url',
        'huongdan' => 'required|min:100',
        'thoigian' => 'required|numeric',
        'dokho' => 'required',
        'gioithieu' => 'required|min:10',


      ]
    );

    if ($validator->fails()) {
      return Redirect::back()->withErrors($validator);
    }

    $monan = new DSMonan;
    $monan->tenMonan = $request->tenMonan;
    $monan->categorie = $request->categorie;
    $monan->hinhMinhhoa = $request->hinhMinhhoa;
    $monan->gioithieu = $request->gioithieu;
    $monan->thoigian = $request->thoigian;
    $monan->dokho = $request->dokho;
    $monan->huongdan = $request->huongdan;
    $monan->nguon = $request->nguon;
    $monan->createby = Auth::id();

    $monan->save();

//Them DungcuMonan
    foreach ($request->dungcu as $v) {
      $id = DB::table('DSDungcu')->where('tenDungcu', $v)->value('id');
      if ($id == null) {
        $DSDungcu = new DSDungcu;
        $DSDungcu->tenDungcu = $v;
        $DSDungcu->save();
        $id = $DSDungcu->id;
      }
      $DungcuMonan = new DungcuMonan;
      $DungcuMonan->idMonan = $monan->id;
      $DungcuMonan->idDungcu = $id;
      $DungcuMonan->save();
    }


//Them NguyenlieuMonan
    for ($i=0; $i < count($request->nguyenlieu); $i++) {

      $id = DB::table('DSNguyenlieu')->where('tenNguyenlieu', $request->nguyenlieu[$i])->value('id');
      if ($id == null) {
        $DSNguyenlieu = new DSNguyenlieu;
        $DSNguyenlieu->tenNguyenlieu = $request->nguyenlieu[$i];
        $DSNguyenlieu->save();
        $id = $DSNguyenlieu->id;
      }
      $NguyenlieuMonan = new NguyenlieuMonan;
      $NguyenlieuMonan->idMonan = $monan->id;
      $NguyenlieuMonan->idNguyenlieu = $id;
      $NguyenlieuMonan->soluong = $request->soluong[$i];
      $NguyenlieuMonan->donvi = $request->donvi[$i];
      $NguyenlieuMonan->save();
    }





  }


}
