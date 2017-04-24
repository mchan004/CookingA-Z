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

      // $wh = array(array());
      //
      // $NL = $request->nguyenlieu;
      //
      // for ($i=0; $i < count($NL); $i++) {
      //   $wh[$i][0] = 'DSNguyenlieu.tenNguyenlieu';
      //   $wh[$i][1] = '=';
      //   $wh[$i][2] = $NL[$i];
      // }
      //
      // $monan = DB::table('DSMonan')
      // ->join('NguyenlieuMonan', 'DSMonan.id', '=', 'NguyenlieuMonan.idMonan')
      // ->join('DSNguyenlieu', 'DSNguyenlieu.id', '=', 'NguyenlieuMonan.idNguyenlieu')
      //
      //
      // ->select('DSMonan.*')
      // ->get()->where($wh);
      $this->NL = $request->nguyenlieu;


      $monan = DSMonan::whereHas('NguyenlieuMonan', function ($query) {
        $query->where('idNguyenlieu', '=', $this->NL);
      })->get();




      //$monan = NguyenlieuMonan::where('', '');
      //print_r($NL);
      print_r($monan);
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
