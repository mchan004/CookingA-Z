<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\profile;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user=User::All();
      $profile=profile::All();
        return view('Login.profile-index')->with(['user'=>$user,'profile'=>$profile]);
        //return view('Login.vu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile=new profile;
        $profile->gioithieu="Web Designer / UX / Graphic Artist / Coffee Lover";
        $profile->sodienthoai="0944462220";
        $profile->diachi="viet nam";
        $profile->hinhminhhoa="http://localhost/gentelella-master/production/images/img.jpg";
        $profile->chucvu="Strategist";
        $profile->danhgia="3";
        $profile->idUser="1";
        $profile->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user=User::find($id);
      $profile=profile::find($id);
        return view('Login.profile-show')->with(['user'=>$user,'profile'=>$profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user=User::find($id);
      $users=User::All();
      $profile=profile::find($id);
        return view('Login.profile-edit')->with(['user'=>$user,'profile'=>$profile,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $profile=profile::find($id);
      $profile->gioithieu=$request['gioithieu'];
      $profile->sodienthoai=$request['sodienthoai'];
      $profile->diachi=$request['diachi'];
      $profile->hinhminhhoa=$request['hinhminhhoa'];
      $profile->chucvu=$request['chucvu'];
      $profile->danhgia=$request['danhgia'];
      $profile->idUser=$request['idUser'];
      $profile->save();

      $user=User::find($id);
      $users=User::All();
      $profile=profile::find($id);
        return view('Login.profile-edit')->with(['user'=>$user,'profile'=>$profile,'users'=>$users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $profile=profile::find($id)->delete();
      $user=User::All();
      $profile=profile::All();
        return view('Login.profile-index')->with(['user'=>$user,'profile'=>$profile]);
    }
}
