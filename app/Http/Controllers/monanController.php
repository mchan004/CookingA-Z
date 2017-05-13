<?php

namespace App\Http\Controllers;
use App\DSMonAn;
use App\DSDungCu;
use App\DSNguyenLieu;
use App\DungcuMonan;
use App\NguyenlieuMonAn;
use App\Categories;

use Illuminate\Http\Request;

class monanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $monan=DSMonAn::All();
      $danhmuc=Categories::All();
      return view('Login.monan')->with(['monan'=>$monan,'danhmuc'=>$danhmuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $monan=DSMonAn::All();
      $danhmuc=Categories::All();
        return view('Login.themmonan')->with(['monan'=>$monan,'danhmuc'=>$danhmuc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $monan=new DSMonAn;
      $monan->tenMonan=$request['tenmonan'];
      $monan->gioithieu=$request['gioithieu'];
      $monan->hinhMinhhoa=$request['hinhanh'];
      $monan->thoigian=$request['thoigian'];
      $monan->dokho=$request['dokho'];
      $monan->origin=$request['quocgia'];
      $monan->huongdan=$request['huongdan'];
      $monan->categorie=$request['danhmuc'];
      $monan->createby=$request['create'];
      $monan->save();
      return redirect()->route('monan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $monan=DSMonAn::find($id);
      $dungcu=DSDungCu::find($id);
      $nguyenlieu=DSNguyenLieu::find($id);
      $dungcumonan=DungcuMonan::find($id);
      $nguyenlieumonan=NguyenlieuMonAn::find($id);
      $danhmucs=Categories::All();
      $danhmuc=Categories::find($id);
      return view('Login.monanchitiet')->with(['monan'=>$monan,
                                               'danhmuc'=>$danhmuc,
                                               'dungcu'=>$dungcu,
                                               'nguyenlieu'=>$nguyenlieu,
                                               'dungcumonan'=>$dungcumonan,
                                               'nguyenlieumonan'=>$nguyenlieumonan,
                                               'danhmucs'=>$danhmucs
                                             ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $monan=DSMonAn::find($id);
        $monan->tenMonan=$request['tenmonan'];
        $monan->gioithieu=$request['gioithieu'];
        $monan->hinhMinhhoa=$request['hinhanh'];
        $monan->thoigian=$request['thoigian'];
        $monan->dokho=$request['dokho'];
        $monan->origin=$request['quocgia'];
        $monan->huongdan=$request['huongdan'];
        $monan->categorie=$request['danhmuc'];
        $monan->save();
        return redirect()->route('monan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monan=DSMonAn::find($id)->delete();
        return redirect()->route('monan.index');
    }
}
