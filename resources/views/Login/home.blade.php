@extends('Login.Layouts.app')

@section('content')
<<<<<<< HEAD
=======

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Bookmark</h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row cooking-item">

    @foreach ($book as $v)
          <a href="/{{$v->id}}/{{str_slug($v->tenMonan, '-')}}">
            <div class="col-sm-3 col-xs-6" style="margin-bottom: 5px">
              <div class="row hinh-item" style="margin-right: -7px">
                <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" width="100%" style="height: 180px" class="img-responsive">
              </div>
              <div class="time">
                @isset($v->video)<img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20">@endisset
                <span>@if ($v->dokho == 3) Bình thường: {{$v->thoigian}}p @elseif ($v->dokho == 4) Khó: {{$v->thoigian}}p @else Dễ: {{$v->thoigian}}p @endif</span>
              </div>

              <div class="row NL">
                <h3>{{$v->tenMonan}}</h3>

              </div>
            </div>
          </a>
    @endforeach



  </div>
</div>
>>>>>>> master
@endsection
