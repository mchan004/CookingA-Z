<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DSMonan;

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
             ->take(6)
             ->get();
      echo $newest."<br>";

        return view('home', ['newest' => $newest]);
    }

    public function inside($id)
    {
      return view();
    }


}
