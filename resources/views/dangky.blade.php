<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-thêm.css">
<link rel="stylesheet" href="{{ URL::asset('css/dk.css') }}" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="src/css/star-rating-svg.css">

    </
  </head>
  <body>
    <div class="container">
 <h1 class="text-center">Trang Đăng Ký Học Nấu Ăn</h1>
 <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
   <legend><a href="http://localhost:8000/thucan"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend>
   <form action="http://localhost:8000/thucan" method="post" class="form" role="form">
    <div class="row">
     <div class="col-xs-7 col-md-6"> <input class="form-control" name="firstname" placeholder="Họ" required="" type="text">
     </div>
     <div class="col-xs-4 col-md-7"> <input class="form-control" name="lastname" placeholder="Tên" required="" type="text">
     </div>
    </div> <input class="form-control" name="youremail" placeholder="Email" type="email"> <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> <label for=""> Ngày sinh</label>
    <div class="row">   
    </div> <label class="radio-inline"><input name="sex" id="inlineCheckbox1" value="male" type="radio">Nam </label> <label class="radio-inline"><input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ </label>
    <br>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>
   </form>
  </div>
 </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="src/jquery.star-rating-svg.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
