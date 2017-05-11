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
    <style>
        .zoom:hover {
            background-color: #eaecef;
        }
    </style>
    <div>
        <h3><strong>Thể loại</strong></h3>
    </div>
    <div class="row">
        <a href="/monan">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Tất cả" idNguyenlieu="" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/all.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Tất cả
                </div>
            </div>
        </a>
        <a href="/monan/monbanh">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/banhkem.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Món bánh
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Món nướng" idNguyenlieu="5" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/barbecue.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Món nướng
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Món chiên/xào" idNguyenlieu="1" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/pan.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Món chiên/xào
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Món nấu" idNguyenlieu="10" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/noi.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Món nấu
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Món hấp" idNguyenlieu="3" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/cooking.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Món hấp
                </div>
            </div>
        </a>
        <a href="/monan/thucuong">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/nuoc.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Thức uống
                </div>
            </div>
        </a>


    </div>
    <div>
        <h3><strong>Nguyên liệu</strong></h3>
    </div>
    <div class="row">
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Tất cả" idNguyenlieu="" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/all.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Tất cả
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Hải sản" idNguyenlieu="Hải sản" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/fish.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Hải sản
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Thịt bò" idNguyenlieu="Bò" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/bo.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Thịt bò
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Thịt gà" idNguyenlieu="Gà" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/ga.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Thịt gà
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Thịt heo" idNguyenlieu="Heo" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/heo.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Thịt heo
                </div>
            </div>
        </a>
        <a href="#timkiem">
            <div class="col-xs-2 col-sm-2 col-md-1 text-center zoom" name="Trứng" idNguyenlieu="Trứng" style="margin: 15px; border-left: solid 1px #ecebeb; border-right: solid 1px #ecebeb;">
                <div>
                    <img src="{{ URL::asset('images/icon/trung.svg') }}" alt="" class="img-responsive">
                </div>
                <div style="margin-top: 5px">
                    Trứng
                </div>
            </div>
        </a>

    </div>
    <div class="col-md-5" id="timkiem">
      <form class="" action="/timmonan" method="post">
        {{ csrf_field() }}
        <h5>Tìm thêm nguyên liệu</h5>
        <input type="text" class="form-control" placeholder="Nhập tên nguyên liệu (ví dụ đùi gà, ức gà, sườn heo, ...)" onkeyup="showResult(this.value)">

        <select multiple class="form-control" id="livesearch">
        </select>
        <br>
        <div id="nguyenlieu">
          @isset($tl)
            @if ($tl == "monbanh")

              <button type="button" class="btn btn-success bo">Món bánh<input type="hidden" name="theloai" value="2"></button>

            @elseif ($tl == "thucuong")

              <button type="button" class="btn btn-success bo">Thức uống<input type="hidden" name="theloai" value="3"></button>


            @endif
          @endisset

        </div>
        <p><em>Chọn vào để loại bỏ</em>
        </p>
        <center>
          <button type="submit" class="btn btn-warning btn-lg">Tìm kiếm</button>
        <center>
      </form>
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
                              <div class="row hinh-item">
                                <img src="{{$v->hinhMinhhoa}}" alt="{{$v->tenMonan}}" width="100%" style="height: 200px" class="img-responsive">
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
</div>
@endsection

@section('addscript')
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click', '.zoom', function() {
      var ten = $(this).attr("name");
        if (ten == "Tất cả") {
          $("#nguyenlieu").html("");
        }
        else if (ten == "Món nướng" || ten == "Món chiên/xào" || ten == "Món nấu" || ten == "Món hấp") {
          $("#nguyenlieu").append(" <button type=\"button\" class=\"btn btn-success bo\"> " + ten + "<input type=\"hidden\" name=\"dungcu[]\" value=\"" + $(this).attr("idNguyenlieu") + "\"></button>");
        }
        else if (ten == "Thịt heo" || ten == "Trứng" || ten == "Thịt gà" || ten == "Thịt bò" || ten == "Hải sản") {
          $("#nguyenlieu").append(" <button type=\"button\" class=\"btn btn-success bo\"> " + ten + "<input type=\"hidden\" name=\"group[]\" value=\"" + $(this).attr("idNguyenlieu") + "\"></button>");
        }
        else{
          $("#nguyenlieu").append(" <button type=\"button\" class=\"btn btn-success bo\"> " + ten + "<input type=\"hidden\" name=\"nguyenlieu[]\" value=\"" + $(this).attr("idNguyenlieu") + "\"></button>");
        }
    });

    $(document).on('click', '.bo', function() {
        $(this).remove();
    });



    $("select").change(function() {
      $( "select option:selected" ).each(function() {
        $("#nguyenlieu").append(" <button type=\"button\" class=\"btn btn-success bo\"> "
        + $(this).text() + "<input type=\"hidden\" name=\"nguyenlieu[]\" value=\"" + $(this).attr("value") + "\"></button>");
      });


    });

});
</script>
<script>
function showResult(str) {
  if (str.length==0) {
    // document.getElementById("livesearchNguyenlieu").innerHTML="";
    // document.getElementById("livesearchNguyenlieu").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","/livesearchNguyenlieu/"+str,true);
  xmlhttp.send();
}
</script>



@endsection
