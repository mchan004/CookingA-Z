@extends('Login.Layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Quản lý danh mục</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <form action="{{route('danhmuc-store')}}" method="post">
          {{ csrf_field() }}
            <tr>
              <td></td>
              <td><input type="text" class="form-control"name="danhmuc" value=""></td>
              <td><input type="submit" value="Thêm" class="btn btn-info btn-xs"></td>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </form>
          <?php foreach ($danhmuc as $key): ?>
            <form action="danhmuc-update/{{$key->id}}"method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>{{$key->id}}</td>
                <td><input type="text" class="form-control"name="danhmuc" value="{{$key->name}}"></td>
                <td>
                  <input type="submit" value="Sửa" class="btn btn-info btn-xs">
                  <a href="danhmuc-destroy/{{$key->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
      {{ $danhmuc->links() }}
    </div>
  </div>
</div>

@endsection
