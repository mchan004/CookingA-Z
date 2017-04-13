<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') </title>

<!-- Bootstrap -->
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">Cooking A-Z</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Món chính<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Món tráng miệng, bánh</a></li>
        <li><a href="#">Thức uống</a></li>
        <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <!--
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><strong>Blog</strong></a></li>
        <li><a href="#">Đăng nhập</a></li>
        <li><a href="#">Thảo luận</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>



@yield('content')


<div class="container-fluid footer">
  <div class="row">
    <div class="col-xs-6 col-sm-2">
      <div class="row">
        <ul>
          <li><a href="http://yourwebsite.com/" >Trang chủ</a></li>
          <li><a href="http://yourwebsite.com/" >Món chính</a></li>
          <li><a href="http://yourwebsite.com/" >Món tráng miệng, bánh</a></li>
          <li><a href="http://yourwebsite.com/" >Thức uống</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-6 col-sm-2">
      <div class="row">
        <ul>
          <li><a href="http://yourwebsite.com/" ><strong>Blog</strong></a></li>
          <li><a href="http://yourwebsite.com/" >Đăng nhập</a></li>
          <li><a href="http://yourwebsite.com/" >Bookmark</a></li>
          <li><a href="http://yourwebsite.com/" >Thảo luận</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-3"> Đăng ký nhận công thức món ăn ngon nhất: <br>
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Enter your email">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Sign up</button>
      </span>
    </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-offset-1">
      <div class="row text-center">
        <div class="share-links"> <a class="pinterest" href="http://www.pinterest.com/nytfood/"></a> <a class="fb" href="https://www.facebook.com/nytfood"></a> <a class="twitter" href="https://twitter.com/nytfood"></a> </div>
        fb.com/CookingAZ </div>
    </div>
  </div>
</div>


<script src="{{ URL::asset('js/jquery-3.2.0.min.js') }}"></script>
@yield('addscript')
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>



</body>
</html>