@extends('layouts.topAndfooter')

@section('title', 'Page Title')


@section('content')
<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">Từ điển món ăn<br>Cooking A-Z</h1>
  </div>
  <hr>
</div>
<div class="container-fluid">
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"> <img src="{{ URL::asset('images/hinh1.jpg') }}" alt="Chania"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh2.jpg') }}" alt="Chania"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh3.jpg') }}" alt="Flower"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh2.jpg') }}" alt="Flower"> </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
  <hr>
</div>


<div class="container-fluid">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3">Click outside the blue container to select this <strong>row</strong>. Columns are always contained within a row. <strong>Rows are indicated by a dashed grey line and rounded corners</strong>. </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-sm-offset-1 text-center"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/calendar-icon2.svg?7708455607991419225" alt="What You Want">
      <h4>What You Want,<br>
        When You Want It</h4>
      <p class="hidden-xs">Choose from hundreds of recipes and reorder your favorite meal at any time.</p>
    </div>
    <div class="text-center col-sm-3"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/partners-icon2.svg?7708455607991419225" alt="What You Want">
      <h4>Famous Chefs,<br>
        Trusted Partners</h4>
      <p class="hidden-xs">Our celebrity chefs and trusted culinary teams make you look like a pro.</p>
    </div>
    <div class="text-center col-sm-3"> <img src="https://cdn.shopify.com/s/files/1/0658/0121/files/spatula-icon2.svg?7708455607991419225s" alt="What You Want">
      <h4>No Subscriptions</h4>
      <p class="hidden-xs">You hate subscriptions, we hate subscriptions. You won't find them in our kitchen.</p>
    </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10">
      <h3><strong>Newest cooking</strong></h3>
      <div class="row cooking-item">
        <!--item-->

@foreach ($newest as $v)
        <div class="col-sm-4 col-xs-6">
          <div class="row" style="margin-right: -12px"> <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" style="height: 30%;" width="100%" class="img-responsive"> </div>
          <div class="row" style="margin-left: -7px">
            <h4>{{$v->tenMonan}}</h4>
            <small><em>Gà, Lò vipa, nướng</em> <br>
            <img src="<?php echo URL::asset("images/flags/".$v->origin.".svg"); ?>" height="20">
            <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
        </div>
@endforeach

      </div>

      <h3>Món tráng miệng, bánh</h3>
      <div class="row cooking-item">
        <!--item-->
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
      </div>
      <h3>Thức uống, cooktai</h3>
      <div class="row cooking-item">
        <!--item-->
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row" style="margin-bottom:3px;">
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-right: -12px"> <img src="{{ URL::asset('images/hinhnho1.jpg') }}" alt="..." class="img-responsive"> </div>
            </div>
            <div class="col-sm-12 col-xs-6">
              <div class="row" style="margin-left: -7px;">
                <h4><a href="#">40 Cloves garlic chicken</a></h4>
                <small>Dễ: 15p</small> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center" style="margin-top:10px">
        <button type="button" class="btn btn-warning btn-lg">XEM THÊM</button>
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
      <div class="row">
        <div class="well" style="padding-top:0px; margin-left:5px">
        	<div class="row">
            	<h4 style="margin-left:10px">Tài khoản</h4>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                  </div>
                  <button type="submit" class="btn btn-default">Đăng nhập</button>
                </form>
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
      	<img src="http://www.bigc.vn/res/bnr_img/15.jpg" alt="..." class="img-responsive">

      </div>

    </div>
  </div>
</div>
@endsection
