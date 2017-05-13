@extends('Login.Layouts.app')

@section('content')
<form action="{{route('monan.store')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Danh mục:</label>
        <select class="form-control"name="danhmuc">
          <?php foreach ($danhmuc as $key): ?>
            <option value="{{$key->id}}">{{$key->name}}</option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label>Tên món ăn:</label>
        <input type="text" class="form-control" name="tenmonan" value="{{$monan->tenMonan or ""}}">
      </div>
      <div class="form-group">
        <label>Thời gian:</label>
        <input type="text" class="form-control" name="thoigian" value="{{$monan->thoigian or ""}}">
      </div>
      <div class="form-group">
        <label>Quốc gia:</label>
        <input type="text" class="form-control" name="quocgia" value="{{$monan->origin or ""}}">
      </div>
      <div class="form-group">
        <label>Độ khó:</label>
        <input type="text" class="form-control" name="dokho" value="{{$monan->dokho or ""}}">
      </div>
      <div class="form-group">
        <label>Hình ảnh:</label>
        <input type="text" class="form-control" name="hinhanh" value="{{$monan->hinhMinhhoa or ""}}">
      </div>
      <div class="form-group">
        <label>create:</label>
        <input type="text" class="form-control" name="create" value="{{$monan->hinhMinhhoa or ""}}">
      </div>
      <div class="form-group">
        <label>Giới thiệu:</label>
        <textarea class="form-control" rows="10" name="gioithieu">{{$monan->gioithieu or ""}}</textarea>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Hướng dẫn:</label>
        <textarea class="form-control" rows="50" name="huongdan">{{$monan->huongdan or ""}}</textarea>
      </div>
        <script>
            CKEDITOR.replace( 'huongdan' );
        </script>
    </div>
  </div>

  <input type="submit" value="Thêm" class="btn btn-info btn-xs">
</form>
@endsection
