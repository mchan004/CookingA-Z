<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;
use App\BookmarksMonan;
use Illuminate\Support\Facades\Auth;

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

      //print_r($newest[0]->NguyenlieuMonan->pluck('tenNguyenlieu'));

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

      $book = BookmarksMonan::where('idMonan', $id)->where('createby', Auth::id())->first();

      if ($book != null) {
        $book = true;
      }
      else {
        $book = false;
      }


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









}
