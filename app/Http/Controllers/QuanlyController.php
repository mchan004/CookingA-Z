<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DSMonan;
use App\NguyenlieuMonan;
use App\DSNguyenlieu;

class QuanlyController extends Controller
{
  public function QuanlyMonan()
  {
    $DSMonan = DB::table('DSMonan')->orderBy('id')->get();

    return view('Login.quanlymonan', ['DSMonan' => $DSMonan]);
  }
  public function ThemMonan()
  {
      return view('Login.chinhsuamonan');
  }

  
}
