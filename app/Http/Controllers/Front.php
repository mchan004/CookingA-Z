<?php
use App\User;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
  public function register() {
  if (Request::isMethod('post')) {
      User::create([
                  'name' => Request::get('name'),
                  'email' => Request::get('email'),
                  'password' => bcrypt(Request::get('password')),
      ]);
  }

  return Redirect::away('login');
}
public function authenticate() {
    if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
        return redirect()->intended('checkout');
    } else {
        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
}
public function logout() {
    Auth::logout();

    return Redirect::away('login');
}
}
