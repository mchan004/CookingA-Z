<?php

namespace App\Http\Controllers;

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

    public function outside($tl)
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


      return view('outside', ['newest' => $newest]);




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
          $hint .= "<option>" . $v->tenNguyenlieu . "</option>";
        }

      }

      // Set output to "no suggestion" if no hint was found
      // or to the correct values

        $response=$hint;


      //output the response
      echo $response;
    }






}
