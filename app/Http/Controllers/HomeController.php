<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DSMonan;
use App\DSNguyenlieu;
use App\NguyenlieuMonan;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
           public function showLogin()
      {
          // show the form
          return View('login');
      }

      public function doLogin()
      {
      // process the form
      // validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        echo 'SUCCESS!';

    } else {

        // validation not successful, send back to form
        return Redirect::to('login');

    }

      }
    }

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

    public function outside()
    {

      $newest = DSMonan::orderBy('created_at', 'desc')
                        ->take(12)
                        ->get();

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
