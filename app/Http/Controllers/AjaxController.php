<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;
use App\DSDungcu;
use App\BookmarksMonan;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
  public function livesearchNguyenlieu($nhap)
  {

    //get the q parameter from URL
    $q=$nhap;

    //lookup all links from the xml file if length of q>0
    if (strlen($q)>0) {
      $hint="";

      $NL = DSNguyenlieu::where('tenNguyenlieu', 'like', '%'.$q.'%')->take(15)->get();
      foreach ($NL as $v) {
        $hint .= "<option value=\"" . $v->id . "\">" . $v->tenNguyenlieu . "</option>";
      }

    }

    echo $hint;
  }

  public function livesearchNguyenlieuDatalist($nhap)
  {

    //get the q parameter from URL
    $q=$nhap;

    //lookup all links from the xml file if length of q>0
    if (strlen($q)>0) {
      $hint="";

      $NL = DSNguyenlieu::where('tenNguyenlieu', 'like', '%'.$q.'%')->take(15)->get();
      foreach ($NL as $v) {
        $hint .= "<option value=\"" . $v->tenNguyenlieu . "\">" . $v->group . "</option>";
      }

    }

    echo $hint;
  }

  public function livesearchDungcuDatalist($nhap)
  {

    //get the q parameter from URL
    $q=$nhap;

    //lookup all links from the xml file if length of q>0
    if (strlen($q)>0) {
      $hint="";

      $NL = DSDungcu::where('tenDungcu', 'like', '%'.$q.'%')->take(15)->get();
      foreach ($NL as $v) {
        $hint .= "<option value=\"" . $v->tenDungcu . "\">";
      }

    }

    echo $hint;
  }


  public function AddBookmark($id)
  {
    $book = BookmarksMonan::where('idMonan', $id)->where('createby', Auth::id())->first();

    if ($book == null) {
      $book = new BookmarksMonan;
      $book->idMonan = $id;
      $book->createby = Auth::id();
      $book->save();
      echo "Huỷ nhớ món ăn";
    }
    else {
      $book->delete();
      echo "Ghi nhớ món ăn";
    }

  }

  public function RemoveBookmark($id)
  {

  }










}
