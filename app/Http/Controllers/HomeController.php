<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $newest = DSMonan::orderBy('created_at', 'desc')
                        ->take(12)
                        ->get();
      $thucuong = DSMonan::where('categorie', 3)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->get();
      $trangmieng = DSMonan::where('categorie', 2)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->get();


      return view('home', ['newest' => $newest, 'thucuong' => $thucuong, 'trangmieng' => $trangmieng, 'title' => 'Từ điển món ăn CookingA-Z']);
    }

    public function inside($id)
    {
      $monan = DSMonan::find($id);
      $nguyenlieu = NguyenlieuMonan::where('idMonan', $id)->get();
      return view('inside', ['monan' => $monan, 'nguyenlieu' => $nguyenlieu]);
    }

    public function outside($tl = '')
    {
      if ($tl == 'monbanh') {
          $newest = DSMonan::where('categorie', 2)
                            ->orderBy('created_at', 'desc')
                            ->take(32)
                            ->get();
      }
      elseif ($tl == 'thucuong') {
          $newest = DSMonan::where('categorie', 3)
                            ->orderBy('created_at', 'desc')
                            ->take(32)
                            ->get();
      }
      elseif ($tl == 'monchinh') {
          $newest = DSMonan::where('categorie', 1)
                        ->orderBy('created_at', 'desc')
                        ->take(32)
                        ->get();
      }
      else {
          $newest = DSMonan::orderBy('created_at', 'desc')
                        ->take(32)
                        ->get();

      }


      return view('outside', ['newest' => $newest, 'tl' => $tl]);




    }


    public function timmonan(Request $request)
    {
      $monan = DB::table('DSMonan');

      if (isset($request->nguyenlieu) || isset($request->group)) {
        $monan = $monan->join('NguyenlieuMonan', 'DSMonan.id', '=', 'NguyenlieuMonan.idMonan');
        if (isset($request->nguyenlieu)) {
          $monan = $monan->where('NguyenlieuMonan.idNguyenlieu', $request->nguyenlieu);
        }
        if (isset($request->group)) {
          $monan = $monan->join('DSNguyenlieu', 'DSNguyenlieu.id', '=', 'NguyenlieuMonan.idNguyenlieu');
          $monan = $monan->where('DSNguyenlieu.group', 'Heo');
        }

      }


      if (isset($request->dungcu)) {
        $monan = $monan->join('DungcuMonan', 'DSMonan.id', '=', 'DungcuMonan.idMonan')
                       ->where('DungcuMonan.idDungcu', $request->dungcu);
      }

      if (isset($request->theloai)) {
        $monan = $monan->where('DSMonan.categorie', $request->theloai);
      }

      $monan = $monan->select('DSMonan.*')->take(32)->get();


      foreach ($monan as $v) {
        $v->NguyenlieuMonan = DB::table('NguyenlieuMonan')
            ->join('DSNguyenlieu', 'DSNguyenlieu.id', '=', 'NguyenlieuMonan.idNguyenlieu')
            ->where('NguyenlieuMonan.idMonan', $v->id)
            ->select('DSNguyenlieu.tenNguyenlieu')->orderBy('priority', 'desc')->take(4)->get();
      }

      return view('outside', ['newest' => $monan]);
    }












    public function livesearchNguyenlieu($nhap)
    {

      //get the q parameter from URL
      $q=$nhap;

      //lookup all links from the xml file if length of q>0
      if (strlen($q)>0) {
        $hint="";

        $NL = DSNguyenlieu::where('tenNguyenlieu', 'like', '%'.$q.'%')->take(20)->get();
        foreach ($NL as $v) {
          $hint .= "<option value=\"" . $v->id . "\">" . $v->tenNguyenlieu . "</option>";
        }

      }

      echo $hint;
    }






}
