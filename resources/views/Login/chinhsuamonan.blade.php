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
                <li>
                  <a href="#step-4">
                    <span class="step_no">4</span>
                    <span class="step_descr">
                                      Step 4<br />
                                      <small>Step 4 description</small>
                                  </span>
                  </a>
                </li>
              </ul>
              <div id="step-1">
                <form class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Nguyên liệu món ăn
                      <br><small>Nguyên liệu cho món ăn của bạn</small>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="row">
                        <input list="browsers" name="browser" class="col-md-9 col-xs-9" onkeyup="showResult(this.value)">
                        <datalist id="browsers">
                        </datalist>
                        <input type="button" name="" value="Thêm" class="col-md-3 col-xs-3">

                      </div>
                      <div class="row">
                        <p><i>Click thêm để thêm nguyên liệu cho món ăn của bạn</i></p>
                      </div>
                      <div class="row" id="DSNguyenlieu">
                        <table>
                          <tr>
                            <th width="20%">Số lượng</th>
                            <th width="20%">Đơn vị</th>
                            <th width="60%">Tên nguyên liệu</th>
                          </tr>
                          <tr>
                            <td><i>Ví dụ</i></td>
                          </tr>
                          <tr>
                            <td><input type="text" placeholder="12" class="form-control" readonly></td>
                            <td><input type="text" placeholder="quả" class="form-control" readonly></td>
                            <td><input type="text" placeholder="Trứng gà" class="form-control" readonly></td>
                          </tr>
                          <tr>
                            <td><input type="text" placeholder="300" class="form-control" readonly></td>
                            <td><input type="text" placeholder="g" class="form-control" readonly></td>
                            <td><input type="text" placeholder="Bột mỳ" class="form-control" readonly></td>
                          </tr>
                          <tr>
                            <td><i>.</i></td>
                          </tr>
                          <tr>
                            <td><input type="text"  class="form-control"></td>
                            <td><input type="text"  class="form-control"></td>
                            <td><input type="text"  class="form-control"></td>
                          </tr>
                        </table>

                      </div>

                    </div>
                  </div>

                </form>

              </div>
              <div id="step-2">
                <h2 class="StepTitle">Step 2 Content</h2>
                <p>
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <div id="step-3">
                <h2 class="StepTitle">Step 3 Content</h2>
                <p>
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                  eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <div id="step-4">
                <h2 class="StepTitle">Step 4 Content</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
  xmlhttp.open("GET","/livesearchNguyenlieu/"+str,true);
  xmlhttp.send();
}
</script>



@endsection
