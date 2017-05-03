<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;

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


  public function AddBookmark($id)
  {

  }

  public function RemoveBookmark($id)
  {

  }










}
