<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuanlyController extends Controller
{
  public function home()
  {
    $book = DB::table('DSMonan')
      ->join('BookmarksMonan', 'BookmarksMonan.idMonan', '=', 'DSMonan.id')
      ->where('BookmarksMonan.createby', Auth::id())
      ->select('DSMonan.*')
      ->get();
    return view('Login.home', ['book' => $book]);
  }
}
