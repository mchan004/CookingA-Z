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
                        ->take(9)
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
                            ->take(20)
                            ->get();
      }
      elseif ($tl == 'thucuong') {
          $newest = DSMonan::where('categorie', 3)
                            ->orderBy('created_at', 'desc')
                            ->take(20)
                            ->get();
      }
      elseif ($tl == 'monchinh') {
          $newest = DSMonan::where('categorie', 1)
                        ->orderBy('created_at', 'desc')
                        ->take(20)
                        ->get();
      }
      else {
          $newest = DSMonan::orderBy('created_at', 'desc')
                        ->take(20)
                        ->get();

      }


      return view('outside', ['newest' => $newest, 'tl' => $tl]);




    }

    private $NL;

    public function timmonan(Request $request)
    {


      $monan = DB::table('DSMonan');

      if (isset($request->nguyenlieu)) {
        $monan = $monan->join('NguyenlieuMonan', 'DSMonan.id', '=', 'NguyenlieuMonan.idMonan')
                       ->where('NguyenlieuMonan.idNguyenlieu', $request->nguyenlieu);
      }

      if (isset($request->dungcu)) {
        $monan = $monan->join('DungcuMonan', 'DSMonan.id', '=', 'DungcuMonan.idMonan')
                       ->where('DungcuMonan.idDungcu', $request->dungcu);
      }

      if (isset($request->theloai)) {
        $monan = $monan->where('DSMonan.categorie', $request->theloai);
      }


      $monan = $monan->select('DSMonan.*')->get();
      //$this->NL = $request->nguyenlieu;
      //
      //
      //
      // $monan = DSMonan::whereHas('NguyenlieuMonan', function ($query) {
      //   $query->where('idNguyenlieu', '=', $this->NL);
      // })->get();
      // if (isset($request->theloai)) {
      //   $monan = $monan->where('categorie', $request->theloai);
      // }
      //
      // if (isset($request->dungcu)) {
      //   $monan->where(function ($subQuery)
      //   {
      //     $subwhere->whereHas('NguyenlieuMonan', function ($q)
      //     {
      //       $q->where('idDungcu', '1');
      //     });
      //   });
      // }





      //$monan = NguyenlieuMonan::where('', '');

      print_r($monan);
      //print_r($request->theloai);
      //print_r($request->dungcu);
      //return view('outside', ['monan' => $monan]);
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
