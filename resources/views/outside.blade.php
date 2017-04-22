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

    <div>
        <h3><strong>Thể loại</strong></h3>
    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/all.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Tất cả
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/banhkem.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Món bánh
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/barbecue.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Món nướng
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/pan.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Món chiên/xào
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/noi.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Món lẩu
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/cooking.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Món hấp
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/nuoc.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Thức uống
            </div>
        </div>



    </div>
    <div>
        <h3><strong>Nguen lieu</strong></h3>
    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
          <div>
              <img src="{{ URL::asset('images/icon/all.svg') }}" alt="" class="img-responsive">
          </div>
          <div style="margin-top: 5px">
              Tất cả
          </div>
      </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/bo.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Thịt bò
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/ga.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Thịt gà
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/heo.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Thịt heo
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-1 text-center" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
            <div>
                <img src="{{ URL::asset('images/icon/trứng.svg') }}" alt="" class="img-responsive">
            </div>
            <div style="margin-top: 5px">
                Trứng
            </div>
        </div>


    </div>
    <input type="text" class="form-control" placeholder="Text input">
    <div class="">
      <select multiple class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
    </div>


</div>



<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <h3><strong>Newest Recipes</strong></h3>
            <div class="">
                <div class="row cooking-item">
                    <!--item-->
                    @foreach ($newest as $v)
                    <a href="/{{$v->id}}/{{str_slug($v->tenMonan, '-')}}">
                        <div class="col-sm-3 col-xs-6" style="margin-bottom: 5px">
                            <div class="row" style="margin-right: -12px">
                                <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" style="height: 250px;" width="100%" class="img-responsive">
                            </div>
                            <div class="row" style="margin-left: -7px">
                                <h3>{{$v->tenMonan}}</h3>
                                <small><em>
                        @foreach ($v->NguyenlieuMonan->take(4) as $v1)
                          {{$v1->tenNguyenlieu}},
                        @endforeach
                         ...</em><br>
                        <img src="<?php echo URL::asset("images/flags/".$v->origin.".svg"); ?>" height="20">
                        <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20">@if ($v->dokho == 3) Bình thường: {{$v->thoigian}}p @elseif ($v->dokho == 4) Khó: {{$v->thoigian}}p @else Dễ: {{$v->thoigian}}p @endif</small> </div>
                        </div>
                    </a>
                    @endforeach
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
                            <td><strong>1</strong>
                            </td>
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
</div>@endsection
