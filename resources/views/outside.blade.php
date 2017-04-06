@extends('layouts.topAndfooter')

@section('title', 'Page Title')


@section('content')

<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">Từ điển món ăn<br>Cooking A-Z</h1>
  </div>
  <hr>
</div>

<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10">
      <h3><strong>Newest Recipes</strong></h3>
      <div class="">
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="https://static01.nyt.com/images/2016/08/03/dining/03KITCH1-WEB/03KITCH1-WEB-mediumThreeByTwo252.jpg" width="100%" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cooking-item">
            <!--item-->
            <div class="col-sm-3">
              <div class="row" style="margin-bottom:3px;">
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
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
                  <div class="row" style="margin-right: -12px"> <img src="http://www.savourydays.com/wp-content/uploads/2015/10/bong-lan-trung-muoi.jpg" alt="..." class="img-responsive"> </div>
                </div>
                <div class="col-sm-12 col-xs-6">
                  <div class="row" style="margin-left: -7px;">
                    <h4><a href="#">Bò úc lăn bột chiên nước mắm tỏi ớt</a></h4>
                    <small><img src="{{ URL::asset('images/flags/vn.svg') }}" height="20"> <img src="{{ URL::asset('images/flags/videoplay.svg') }}" width="20"> Khó: 150p</small> </div>
                </div>
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
