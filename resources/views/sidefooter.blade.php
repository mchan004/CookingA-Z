<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @section('sidebar')
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="http://localhost:8000/thucan">Cooking A-Z</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost:8000/outside">Món chính<span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost:8000/montrangmieng">Món tráng miệng, bánh</a></li>
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
            <li><a href="http://localhost:8000/dangnhap">Đăng nhập</a></li>
            <li><a href="#">Thảo luận</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
      <div class="row">
         <h1 class="text-center">Từ điển món ăn<br>Cooking A-Z</h1>
      </div>
      <hr>
    </div>
    @endsection
    
  </body>
</html>
