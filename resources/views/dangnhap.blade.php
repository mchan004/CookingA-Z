<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-thêm.css">
<link rel="stylesheet" href="{{ URL::asset('css/dn.css') }}" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="src/css/star-rating-svg.css">
  </head>
  <body>
    <div class="container">
          <form class="form-signin" role="form">
            <div class="formBox">
                <div class="border signUpForm">
                  <legend><a href="http://localhost:8000/thucan">
                          <i class="glyphicon glyphicon-globe"></i></a> Đăng nhập thành viên!
                  </legend>
    <form method="POST" novalidate>
                    <div class="sso-buttons">
<div class="sso-button-container">
    <a data-device="desktop" data-name="facebook" data-redirect="#" href="#" id="js-facebook-oauth-login" class="sso-button sso-button-facebook">
        <span class="icon icon-oauth-facebook">
            <span class="icon icon-oauth-facebook-hover"></span>
        </span>
        <span class="sso-button-login-text">Facebook</span>
    </a>
</div>
<div class="sso-button-container">
    <a data-device="desktop" data-name="google" data-redirect="#" href="#" id="js-google-oauth-login" class="sso-button sso-button-google">
        <span class="icon icon-oauth-google"></span>
        <span class="sso-button-login-text">Google</span>
    </a>
</div>
</div>
<div class="oauth-separator-wrap">
<span class="oauth-separator-txt">or</span>
</div>

            <input type="email" class="form-control" placeholder="Email " required autofocus>
            <input type="password" class="form-control" placeholder="Mật Khẩu" required>
            <label class="checkbox">
            <input type="checkbox" value="remember-me"> Nhớ tài khoản
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
            <p class="text-center">Bạn có tài khoản không? <strong><a href="http://localhost:8000/dangky"
                class="blue-text">Đăng ký ngay!</a></strong>
     							</p>
          </form>

        </div> <!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="src/jquery.star-rating-svg.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
