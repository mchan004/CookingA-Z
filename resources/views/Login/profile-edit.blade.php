
@extends('Login.Layouts.app')

@section('content')

<form action="/CookingA-Z/public/user/profile/{{$profile->id}}" method="post">
  <input type="hidden" name="_method" value="put">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Giới thiệu:
  <input type="text" class="form-control"name="gioithieu" value="{{$profile->gioithieu}}">
  Số điện thoại:
  <input type="text" class="form-control"name="sodienthoai" value="{{$profile->sodienthoai}}">
  Địa chỉ:
  <input type="text" class="form-control"name="diachi" value="{{$profile->diachi}}">
  Hình minh họa:
  <input type="text" class="form-control"name="hinhminhhoa" value="{{$profile->hinhminhhoa}}">
  Chức vụ:
  <input type="text" class="form-control"name="chucvu" value="{{$profile->chucvu}}">
  Đánh giá:
  <input type="text" class="form-control"name="danhgia" value="{{$profile->danhgia}}">
  User:
  <select class="form-control"name="idUser">
    <option value="<?php echo App\profile::find($profile->id)->user->id?>"><?php echo App\profile::find($profile->id)->user->name?></option>
    <?php foreach ($users as $key): ?>
      <option value="{{$key->id}}">{{$key->name}}</option>
    <?php endforeach; ?>
  </select>
  <br>
  <input type="submit" value="Sửa" class="btn btn-danger btn-xs fa fa-trash-o">
</form>

<form action="/CookingA-Z/public/user/profile/{{$profile->id}}" method="post">
  <input type="hidden" name="_method" value="delete">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <input type="submit" value="Xóa" class="btn btn-danger btn-xs fa fa-trash-o">
</form>
@endsection
