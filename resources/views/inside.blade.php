@extends('layouts.topAndfooter')

@section('title', $monan->tenMonan)


@section('content')
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
        <div class="item active"> <img src="{{$monan->hinhMinhhoa}}" alt="$monan->tenMonan"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh2.jpg') }}" alt="Chania"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh3.jpg') }}" alt="Flower"> </div>
        <div class="item"> <img src="{{ URL::asset('images/hinh2.jpg') }}" alt="Flower"> </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
</div>

<hr>

<div class="container-fluid">
	<div class="col-sm-10">
    	<div class="row">
            <div class="col-sm-7">
                    <div class="row">
                        <h1>{{$monan->tenMonan}}</h1>
                        <span class="my-rating"></span> <a style="font-size:15px;color:#555759;text-decoration: none">{{$monan->comments->count()}} Reviews</a> | <a href="#" style="background-color: #ededed; padding: 5px"><img src="/images/icon/bookmark.svg" alt="bookmark" height="25"> Lưu món ăn yêu thích</a>
                    </div>

                    <div class="row" style="margin-top:10px">
                        <p class="text-justify">{{$monan->gioithieu}}</p>
                    </div>
                </div>
            <div class="col-sm-5">
                    SHARE
                        <ul class="share-buttons">
                          <li><a href="" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="/images/Facebook.png"></a></li>
                          <li><a href="" target="_blank" title="Tweet"><img alt="Tweet" src="/images/Twitter.png"></a></li>
                          <li><a href="" target="_blank" title="Pin it"><img alt="Pin it" src="/images/Pinterest.png"></a></li>
                          <li><a href="" target="_blank" title="Send email"><img alt="Send email" src="/images/Email.png"></a></li>
                        </ul>

                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Nước: <img src="<?php echo URL::asset("images/flags/".$monan->origin.".svg"); ?>" height="20"></p>
                        <p>Thời gian nấu: {{$monan->thoigian}} phút</p>
                        <p>Độ khó: @if ($monan->dokho == 3) Bình thường @elseif ($monan->dokho == 4) Khó @else Dễ @endif</p>
                        <p>Nguyên liệu: {{$nguyenlieu->count()}}</p>

                      </div>
                    </div>

                </div>
		</div>
        <hr>
        <div class="row">
        	<div class="col-sm-3">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="col-xs-3"></th>
                        <th>Nguyên liệu</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($nguyenlieu as $v)
                        <tr>
                          <td>{{$v->soluong}} {{$v->donvi}}</td>
                          <td>{{$v->ten->tenNguyenlieu}}</td>
                        </tr>
                      @endforeach


                    </tbody>
                  </table>
				<table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="col-xs-1"></th>
                        <th>Dụng cụ</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($monan->DungcuMonan as $v)
                        <tr>
                          <td></td>
                          <td>{{$v->tenDungcu}}</td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
            <div class="">
            	<div class="">
                    <h2>Cách làm món {{$monan->tenMonan}}</h2>
                    {!!$monan->huongdan!!}
				      </div>
            </div>
        </div>
        <hr>
        <div class="col-sm-offset-2">
            <div class="row" id="cm">
            	<div class="well">
                    <h3 style="margin-top:0">Comment</h3>
                    <textarea class="form-control" rows="3"></textarea>
                    <b>Bạn đã nấu thành công chưa?</b>
                        <label class="radio-inline">
                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Chưa
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Rồi
                        </label><br>
                    <div class="text-right">
                    	<button class="cancel-btn btn-std">Cancel</button>
                        <button class="send-btn btn-std">Send</button>
                    </div>
                </div>
                <hr>
                <ul class="media-list">

@foreach ($monan->comments as $v)
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="http://cooking.nytimes.com/static/images/user-img-eggplant.png" height="40" width="40" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <div>
                          <h4 class="media-heading">{{$v->name}} <small> | @if ($v->isSuccess == 1) <i><u>Đã nấu thành công</u> @endif khoảng 1 năm trước</i></small></h4>
                          {{$v->comment}}
                      </div>
                      <div style="padding-left:15px">
                        <a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> {{$v->like}} This is helpful</a>
                      </div>
                    </div>
                  </li>
@endforeach

                  <div class="text-center"><button type="button" class="btn btn-default btn-sm">Xem thêm bình luận</button></div>
                </ul>
            </div>
    	</div>
	</div>

	<div class="col-sm-2">
        <div class="row banner hidden-xs">
            <img src="http://www.bigc.vn/res/bnr_img/15.jpg" alt="..." class="img-responsive">
        </div>
	</div>

</div>
<hr>
@endsection


@section('addscript')
<script src="{{ URL::asset('js/jquery.star-rating-svg.js') }}"></script>
<script>
$(function() {
	$(".my-rating").starRating({
	  initialRating: {{$monan->comments->avg('rate')}},
	  strokeColor: '#894A00',
	  strokeWidth: 10,
	  starSize: 18
	});
});
</script>
@endsection
