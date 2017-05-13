@extends('Login.Layouts.app')

@section('content')
<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div >
      <div class="col-sm-12">
        <a href="monan/create">
          <img src="data:image/jpeg;base64,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" alt="" class="img-responsive" style="width:500px;height:300px;">
        </a>
      </div>
      <hr>
    </div>
  </div>

  <?php foreach ($monan as $key): ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div >
        <div class="col-sm-12">
          <a href="{{$key->hinhMinhhoa}}">
            <img src="{{$key->hinhMinhhoa}}" alt="" class="img-responsive" style="width:500px;height:200px;">
          </a>
          <h2>{{$key->tenMonan}}</h2>
          <p><strong>Danh mục: </strong>
              <?php  echo App\DSMonAn::find($key->id)->categorie1->name;?>
        </div>
        <div class="col-xs-12 bottom text-center">
          <div class="col-xs-12 col-sm-5 emphasis">
            <p class="ratings">
              <a>4.0</a>
              <a href="#"><span class="fa fa-star"></span></a>
              <a href="#"><span class="fa fa-star"></span></a>
              <a href="#"><span class="fa fa-star"></span></a>
              <a href="#"><span class="fa fa-star"></span></a>
              <a href="#"><span class="fa fa-star-o"></span></a>
            </p>
          </div>
          <div class="col-xs-12 col-sm-7 emphasis">
              <a href="monan/{{$key->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
              <form action="monan/{{$key->id}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Xóa" class="btn btn-danger btn-xs fa fa-trash-o">
              </form>
          </div>
        </div>
        <hr>
      </div>
    </div>
  <?php endforeach; ?>
</div>
@endsection
