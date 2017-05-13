<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class danhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $danhmuc=Categories::paginate(2);
      return view('Login.danhmuc')->with('danhmuc',$danhmuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $danhmuc=new Categories;
      $danhmuc->name=$request['danhmuc'];
      $danhmuc->save();
      return redirect()->route('danhmuc-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit";
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
      $danhmuc=Categories::find($id);
      $danhmuc->name=$request['danhmuc'];
      $danhmuc->save();
      return redirect()->route('danhmuc-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $danhmuc=Categories::find($id);
      $danhmuc->delete();
      return redirect()->route('danhmuc-index');
    }
}
