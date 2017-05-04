@extends('Login.Layouts.app')

@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Thêm món ăn</h3>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Thêm món ăn</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a></li>
                            <li><a href="#">Settings 2</a></li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- Smart Wizard -->
                <p>cheme.</p>
                <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                        <li>
                            <a href="#step-1">
                                <span class="step_no">1</span>
                                <span class="step_descr">
                                      Bước 1<br />
                                      <small>Thêm nguyên liệu và dụng cụ</small>
                                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <span class="step_no">2</span>
                                <span class="step_descr">
                                      Bước 2<br />
                                      <small>Hướng dẫn chi tiết từng bước</small>
                                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <span class="step_no">3</span>
                                <span class="step_descr">
                                      Bước 3<br />
                                      <small>Bổ xung thêm</small>
                                  </span>
                            </a>
                        </li>

                    </ul>
                    <div id="step-1">
                        <form class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Nguyên liệu món ăn</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <input list="browsers" name="browser" id="themNL" class="col-md-9 col-xs-9" onkeyup="showResult(this.value)">
                                        <datalist id="browsers">
                                        </datalist>
                                        <input type="button" onclick="them()" value="Thêm" class="col-md-3 col-xs-3">
                                    </div>
                                    <div class="row">
                                        <p><i>Tìm nguyên liệu và click thêm để thêm nguyên liệu cho món ăn của bạn</i></p>
                                    </div>
                                    <div class="row" id="DSNguyenlieu">
                                        <table id="tblNL">
                                            <tr>
                                                <th width="20%">Số lượng</th>
                                                <th width="20%">Đơn vị</th>
                                                <th width="60%">Tên nguyên liệu</th>
                                                <th> X </th>
                                            </tr>
                                            <tr>
                                                <td><i>Ví dụ</i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" placeholder="12" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" placeholder="quả" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" placeholder="Trứng gà" class="form-control" readonly>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" placeholder="300" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" placeholder="g" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" placeholder="Bột mỳ" class="form-control" readonly>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><i>.</i></td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Dụng cụ món ăn
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <input list="browsers1" name="browser" id="DC" class="col-md-9 col-xs-9" onkeyup="showResultDC(this.value)">
                                        <datalist id="browsers1">
                                        </datalist>
                                        <input id="themDC" type="button" value="Thêm" class="col-md-3 col-xs-3">

                                    </div>
                                    <div class="row">
                                        <p><i>Tìm dụng cụ và click thêm để thêm dụng cụ cho món ăn của bạn</i></p>
                                    </div>
                                    <div class="row">
                                        <ul class="list-group" id="DSDungcu"></ul>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div id="step-2">

                      <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2">
                          <div class="form-group">
                            <label for="TenMonan">Tên món ăn</label>
                            <input type="text" class="form-control" id="TenMonan">
                          </div>
                          <div class="form-group">
                            <label for="NoiDung">Hướng dẫn chi tiết</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                      </div>

                    </div>
                    <div id="step-3">
                        <h2 class="StepTitle">Step 3 Content</h2>
                        <p>
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                </div>
                <!-- End SmartWizard Content -->

            </div>
        </div>
    </div>
</div>
@endsection



@section('addscript')
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
      document.getElementById("browsers").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","/livesearchNguyenlieuDatalist/"+str,true);
  xmlhttp.send();
}

function showResultDC(str) {
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
      document.getElementById("browsers1").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","/livesearchDungcuDatalist/"+str,true);
  xmlhttp.send();
}


function them() {
  var add = "<tr><td><input type=\"text\" name=\"soluong[]\" class=\"form-control\"></td>           <td><input type=\"text\" name=\"donvi[]\" class=\"form-control\"></td>        <td><input type=\"text\" name=\"nguyenlieu[]\" value=\"" + $('#themNL').val() + "\" class=\"form-control\"></td><td><a href=\"#\" class=\"bo\"><img src=\"/images/icon/dustbin.svg\" alt=\"remove\"></a></td></tr>";


  $("#tblNL").append(add);
}

</script>
<script>
  $(document).ready(function(){
    $(".stepContainer").attr("style","");

    $(document).on('click', '#themDC', function() {
      var add = "<li class=\"list-group-item\">" + $('#DC').val() + "<input type=\"hidden\" name=\"dungcu[]\" value=\"" + $('#DC').val() + "\"></li>";
      $("#DSDungcu").append(add);
    });

    $(document).on('click', '.bo', function() {
        $(this).parent().parent().remove();
    });
  });




</script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'noidung' );
</script>


@endsection
