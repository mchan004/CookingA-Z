<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-4 sidenav">
      <h2>Danh sách món ăn</h2>
      <a href="/them">Thêm món ăn</a>
      <div class="list-group">
        <?php foreach ($monan as $key1): ?>
          <a href="<?php echo "/monan/$key1->id"?>" class="list-group-item"><?php echo $key1->tenMonan ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="col-sm-8 text-left">
      <h2>Chi tiết món ăn</h2>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Thông tin</a></li>
        <li><a data-toggle="tab" href="#menu1">Nguyên liệu</a></li>
        <li><a data-toggle="tab" href="#menu2">Dung Cụ</a></li>
      </ul>


      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

          <form action="/capnhatmonan/<?php echo $monanchitiet->id ?>" method="post">
            <?php echo Form::token(); ?>
            <br>
            <label>id:</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $monanchitiet->id ?>" disabled>

            <label>Tên món ăn:</label>
            <input type="text" class="form-control"name="tenMonan" value="<?php echo $monanchitiet->tenMonan ?>">
            <br>

            <label>Categorie:</label>
            <input type="text" class="form-control"name="categorie" value="<?php echo $monanchitiet->categorie ?>">
            <br>

            <label>Level:</label>
            <input type="text" class="form-control"name="level"value="<?php echo $monanchitiet->level ?>">
            <br>

            <label>Nhà tài trợ:</label>
            <input type="text" class="form-control"name="nhataitro"value="<?php echo $monanchitiet->nhaTaitro ?>">
            <br>

            <label>Giới thiệu:</label>
            <textarea class="form-control" rows="5" name="gioithieu"><?php echo $monanchitiet->gioithieu ?></textarea>
            <br>

            <label>Hình minh họa:</label>
            <input type="text" class="form-control"name="hinhminhhoa"value="<?php echo $monanchitiet->hinhMinhhoa ?>">
            <br>

            <label>Hình minh họa:</label>
            <input type="text" class="form-control"name="origin"value="<?php echo $monanchitiet->origin ?>">
            <br>

            <label>Thời gian:</label>
            <input type="text" class="form-control"name="thoigian" value="<?php echo $monanchitiet->thoigian ?>">
            <br>

            <label>Độ khó:</label>
            <input type="text" class="form-control"name="dokho" value="<?php echo $monanchitiet->dokho ?>">
            <br>

            <label>Video:</label>
            <input type="text" class="form-control"name="video" value="<?php echo $monanchitiet->video ?>">
            <br>

            <label>Hướng dẫn:</label>
            <textarea class="form-control" rows="7" name="huongdan"><?php echo $monanchitiet->huongdan ?></textarea>
            <br>

            <label>Nguồn:</label>
            <input type="text" class="form-control"name="nguon" value="<?php echo $monanchitiet->nguon ?>">
            <br>

            <label>Hits:</label>
            <input type="text" class="form-control"name="hits" value="<?php echo $monanchitiet->hits ?>">
            <br>

            <label>Publish:</label>
            <input type="text" class="form-control"name="publish" value="<?php echo $monanchitiet->publish ?>">
            <br>
            <input type="submit" value="Cập nhật">
            <a href="/xoa/<?php echo $monanchitiet->id ?>">Xóa</a>
            <br>
          </form>

        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Some content in menu 2.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
