@extends('Login.Layouts.app')

@section('content')
<div class="col-md-6 col-sm-6 col-xs-6">
  <div class="x_panel">
    <div class="x_title">
      <h2>Quản lý nguyên liệu</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Tên nguyên liệu</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <form action="{{route('nguyenlieu-store')}}" method="post">
          {{ csrf_field() }}
            <tr>
              <td><input type="text" class="form-control"name="tennguyenlieu" value=""></td>
              <td><input type="submit" value="Thêm" class="btn btn-info btn-xs"></td>
            </tr>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </form>
          <?php foreach ($nguyenlieu as $key): ?>
            <form action="nguyenlieu-update/{{$key->id}}"method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td><input type="text" class="form-control"name="tennguyenlieu" value="{{$key->tenNguyenlieu}}"></td>
                <td>
                  <input type="submit" value="Sửa" class="btn btn-info btn-xs">
                  <a href="nguyenlieu-destroy/{{$key->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
      {{ $nguyenlieu->links() }}
    </div>
  </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-6">
  <div class="x_panel">
    <div class="x_title">
      <h2>Quản lý dụng cụ</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Tên dụng cụ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <form action="{{route('dungcu-store')}}" method="post">
          {{ csrf_field() }}
            <tr>
              <td><input type="text" class="form-control"name="tendungcu" value=""></td>
              <td><input type="submit" value="Thêm" class="btn btn-info btn-xs"></td>
            </tr>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </form>
          <?php foreach ($dungcu as $key): ?>
            <form action="dungcu-update/{{$key->id}}"method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td><input type="text" class="form-control"name="tendungcu" value="{{$key->tenDungcu}}"></td>
                <td>
                  <input type="submit" value="Sửa" class="btn btn-info btn-xs">
                  <a href="dungcu-destroy/{{$key->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
      {{ $dungcu->links() }}
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Quản lý nguyên liệu và món ăn</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Món ăn</th>
            <th>Nguyên liệu</th>
            <th>Số lượng</th>
            <th>Đơn vị</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <form action="{{route('nguyenlieumonan-store')}}" method="post">
          {{ csrf_field() }}
            <tr>
              <td><select class="form-control"name="idmonan">
                <?php foreach ($monan as $key): ?>
                  <option value="{{$key->id}}">{{$key->tenMonan}}</option>
                <?php endforeach; ?>
              </select></td>
              <td><select class="form-control"name="idnguyenlieu">
                <?php foreach ($nguyenlieu as $key): ?>
                  <option value="{{$key->id}}">{{$key->tenNguyenlieu}}</option>
                <?php endforeach; ?>
              </select></td>
              <td><input type="text" class="form-control"name="soluong" value=""></td>
              <td><input type="text" class="form-control"name="donvi" value=""></td>
              <td><input type="submit" value="Thêm" class="btn btn-info btn-xs"></td>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </form>
          <?php foreach ($nguyenlieumonan as $key): ?>
            <form action="nguyenlieumonan-update/{{$key->id}}"method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td><input type="text" class="form-control"name="idmonan" value="{{$key->idMonan}}"></td>
                <td><input type="text" class="form-control"name="idnguyenlieu" value="{{$key->idNguyenlieu}}"></td>
                <td><input type="text" class="form-control"name="soluong" value="{{$key->soluong}}"></td>
                <td><input type="text" class="form-control"name="donvi" value="{{$key->donvi}}"></td>
                <td>
                  <input type="submit" value="Sửa" class="btn btn-info btn-xs">
                  <a href="nguyenlieumonan-destroy/{{$key->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
      {{ $nguyenlieumonan->links() }}
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Quản lý dụng cụ và món ăn</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Món ăn</th>
            <th>Dụng cụ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <form action="{{route('dungcumonan-store')}}" method="post">
          {{ csrf_field() }}
            <tr>
              <td><select class="form-control"name="idmonan">
                <?php foreach ($monan as $key): ?>
                  <option value="{{$key->id}}">{{$key->tenMonan}}</option>
                <?php endforeach; ?>
              </select></td>
              <td><select class="form-control"name="iddungcu">
                <?php foreach ($dungcu as $key): ?>
                  <option value="{{$key->id}}">{{$key->tenDungcu}}</option>
                <?php endforeach; ?>
              </select></td>
              <td><input type="submit" value="Thêm" class="btn btn-info btn-xs"></td>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </form>
          <?php foreach ($dungcumonan as $key): ?>
            <form action="dungcumonan-update/{{$key->id}}"method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td><input type="text" class="form-control"name="idmonan" value="{{$key->idMonan}}"></td>
                <td><input type="text" class="form-control"name="iddungcu" value="{{$key->idDungcu}}"></td>
                <td>
                  <input type="submit" value="Sửa" class="btn btn-info btn-xs">
                  <a href="dungcumonan-destroy/{{$key->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
      {{ $dungcumonan->links() }}
    </div>
  </div>
</div>
@endsection
