@extends('layouts.topAndfooter')

@section('title', $title)


@section('content')

<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">Từ điển món ăn<br>Cooking A-Z</h1>
  </div>
  <hr>
</div>
<div class="container-fluid">
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"> <a href="/{{$newest[0]->id}}/{{str_slug($newest[0]->tenMonan, '-')}}"> <img src="{{$newest[0]->hinhMinhhoa}}" alt="{{$newest[0]->tenMonan}}"> </a> </div>
        <div class="item"> <a href="/{{$trangmieng[0]->id}}/{{str_slug($trangmieng[0]->tenMonan, '-')}}"> <img src="{{$trangmieng[0]->hinhMinhhoa}}" alt="{{$trangmieng[0]->tenMonan}}"> </a> </div>
        <div class="item"> <a href="/{{$newest[1]->id}}/{{str_slug($newest[1]->tenMonan, '-')}}"> <img src="{{$newest[1]->hinhMinhhoa}}" alt="{{$newest[1]->tenMonan}}"> </a> </div>
        <div class="item"> <a href="/{{$thucuong[0]->id}}/{{str_slug($thucuong[0]->tenMonan, '-')}}"> <img src="{{$thucuong[0]->hinhMinhhoa}}" alt="{{$thucuong[0]->tenMonan}}"> </a> </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
  <hr>
</div>


<div class="container-fluid">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3">http://CookingA-Z.net là trang web cung cấp nhiều công thức dạy nấu các món ăn, công thức làm bánh, pha chế thức uống, bạn có thể tìm kiếm các món ăn theo nguyên liệu, dụng cụ có sẵn... </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-sm-offset-1 text-center"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/calendar-icon2.svg?7708455607991419225" alt="What You Want">
      <h3>What You Want,<br>
        When You Want It</h3>
      <p class="hidden-xs">Choose from hundreds of recipes and reorder your favorite meal at any time.</p>
    </div>
    <div class="text-center col-sm-3"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/partners-icon2.svg?7708455607991419225" alt="What You Want">
      <h3>Famous Chefs,<br>
        Trusted Partners</h3>
      <p class="hidden-xs">Our celebrity chefs and trusted culinary teams make you look like a pro.</p>
    </div>
    <div class="text-center col-sm-3"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/spatula-icon2.svg?7708455607991419225s" alt="What You Want">
      <h3>No Subscriptions</h3>
      <p class="hidden-xs">You hate subscriptions, we hate subscriptions. You won't find them in our kitchen.</p>
    </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10">
      <h2><strong>Newest cooking</strong></h2>
      <div class="row cooking-item">
        <!--item-->

@foreach ($newest as $v)

        <div class="col-sm-4 col-xs-6" style="margin-bottom: 5px">
          <a href="/{{$v->id}}/{{str_slug($v->tenMonan, '-')}}">
            <div class="row hinh-item">
              <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" width="100%" class="img-responsive">
            </div>
            <div class="time">
              @isset($v->video)<img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20">@endisset
              <span>@if ($v->dokho == 3) Bình thường: {{$v->thoigian}}p @elseif ($v->dokho == 4) Khó: {{$v->thoigian}}p @else Dễ: {{$v->thoigian}}p @endif</span>
            </div>
            <div class="row NL">
              <h3>{{$v->tenMonan}}</h3>
              <small><em>
              @foreach ($v->NguyenlieuMonan->take(4) as $v1)
                {{$v1->tenNguyenlieu}},
              @endforeach
               ...</em></small>
            </div>
          </a>
        </div>

@endforeach

      </div>

      <h2>Món tráng miệng, bánh</h2>
      <div class="row cooking-item">
        <!--item-->
@foreach ($trangmieng as $v)
      <a href="/{{$v->id}}/{{str_slug($v->tenMonan, '-')}}">
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 5px">
          <div class="row hinh-item">
            <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" width="100%" style="height: 180px" class="img-responsive">
          </div>
          <div class="time">
            @isset($v->video)<img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20">@endisset
            <span>@if ($v->dokho == 3) Bình thường: {{$v->thoigian}}p @elseif ($v->dokho == 4) Khó: {{$v->thoigian}}p @else Dễ: {{$v->thoigian}}p @endif</span>
          </div>
          <div class="row NL">
            <h3>{{$v->tenMonan}}</h3>
            <small><em>
            @foreach ($v->NguyenlieuMonan->take(4) as $v1)
              {{$v1->tenNguyenlieu}},
            @endforeach
             ...</em></small>
          </div>
        </div>
      </a>
@endforeach

      </div>
      <h2>Thức uống, cooktai</h2>
      <div class="row cooking-item">
        <!--item-->
@foreach ($thucuong as $v)
      <a href="/{{$v->id}}/{{str_slug($v->tenMonan, '-')}}">
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 5px">
          <div class="row hinh-item">
            <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" width="100%" style="height: 180px" class="img-responsive">
          </div>
          <div class="time">
            @isset($v->video)<img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20">@endisset
            <span>@if ($v->dokho == 3) Bình thường: {{$v->thoigian}}p @elseif ($v->dokho == 4) Khó: {{$v->thoigian}}p @else Dễ: {{$v->thoigian}}p @endif</span>
          </div>
          <div class="row NL">
            <h3>{{$v->tenMonan}}</h3>
            <small><em>
            @foreach ($v->NguyenlieuMonan->take(4) as $v1)
              {{$v1->tenNguyenlieu}},
            @endforeach
             ...</em></small>
          </div>
        </div>
      </a>
@endforeach
      </div>
      <div class="text-center" style="margin-top:10px">
        <button type="button" class="btn btn-warning btn-lg" onclick="location.href = '/monan';">XEM THÊM</button>
      </div>
      <hr>

      <div class="">
        <div class="media col-sm-10 col-sm-offset-1 col-lg-offset-2 col-lg-8">
          <div class="media-left hidden-xs">
            <a href="#">
              <img class="media-object" src="http://int.nyt.com/applications/cooking/static/images/guides-hp-promo-2x.png" alt="..." height="65">
            </a>
          </div>
          <div class="media-body">
            <blockquote class="blockquote-reverse">
              <small>Master essential dishes, ingredients and cooking techniques on our new Learn to Cook page, which collects our best instructional guides, recipes and videos in one place for novices and confident home cooks alike.</small>
              <small><em>Bí kíp làm bếp</em></small>
            </blockquote>

          </div>
        </div>
      </div>


    </div>
    <div class="col-sm-2">
      <div class="row" >
        <div class="well" style="padding-top:0px; margin-left:5px">
        	<div class="row">
            	<h4 style="margin-left:10px">Tài khoản</h4>
              @if (Auth::guest())

                <form role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>


                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>


                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ đăng nhập
                  <button type="submit" class="btn btn-default">Đăng nhập</button>



                </form>
              @else

              <ul>
                <li><a href="{{ url('user') }}">Trang cá nhân</a></li>
                <li><a href="{{ url('user') }}">Món ăn yêu thích</a></li>
                <li><a href="{{ url('user/monan') }}">Món ăn của bạn</a></li>
                <li>
                  <a title="Thoát" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                    Thoát
                  </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
              @endif
            </div>
        </div>
      </div>
      <div class="row" style="padding-left:5px">
        <h4>Những món được đánh giá cao</h4>
        	<table class="table table-hover table-responsive">
              <tbody>
                <tr>
                  <td><strong>1</strong></td>
                  <td>Gà hồng kong nướng muối</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Bánh flan trà xanh</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Phô mai que trà xanh</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Gà tiềm thuốc bắc</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Bánh bông lan trứng muối trà xanh</td>
                </tr>
              </tbody>
          </table>
      </div>


      <div class="row banner hidden-xs">
      	<img src="/images/banner.png"  alt="..." class="img-responsive">
      </div>

    </div>
  </div>
</div>
@endsection
