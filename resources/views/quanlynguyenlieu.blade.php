<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="text-center">
    <h1>Quản lý nguyên liệu</h1>
    <br>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="text-center">
        <h2>Danh sách nguyên liệu</h1>
        <br>
        <form action="\nguyenlieu">
          <div class="input-group">
            <input type="text" class="form-control" name="timkiem" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <br>
        <div class="list-group">
          <a href="\nguyenlieu" class="list-group-item">Sắp xếp theo tên</a>
          <a href="\nguyenlieu" class="list-group-item">Sắp xếp theo thời gian</a>
        </div>
        <div class="list-group">
          <?php foreach ($nguyenlieu as $key1): ?>
            <a href="<?php echo "/nguyenlieu/$key1->id"?>" class="list-group-item" data-toggle="collapse" data-target="#demo"><?php echo $key1->tenNguyenlieu ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="text-center">
        <h2>Nguyên liệu chi tiết</h1>
        <br>
        <div id="demo">
          <form>
              <div class="form-group text-left">
                <label for="ten">Tên nguyên liệu:</label>
                <input type="text" class="form-control" id="ten" value="<?php echo $nguyenlieuchitiet->tenNguyenlieu?>">
              </div>
              <div class="form-group text-left">
                <label for="nhom">Nhóm nguyên liệu:</label>
                <input type="text" class="form-control" id="nhom"value="<?php echo $nguyenlieuchitiet->group?>">
              </div>
              <div class="form-group text-left">
                <label for="nhom">Sử dụng:</label>
                <input type="text" class="form-control" id="nhom"value="<?php
                if($nguyenlieuchitiet->publish!=0)
                echo "có";
                else echo"không";
                ?>">
              </div>
              <div class="form-group text-left">
                <label for="tenes">Tên nguyên liệu tiếng anh:</label>
                <input type="text" class="form-control" id="tenes"value="<?php echo $nguyenlieuchitiet->english?>">
              </div>
              <!--
              <div class="form-group text-left">
                <label for="soluong">Số lượng:</label>
                <input type="text" class="form-control" id="soluong">
              </div>
              <div class="form-group text-left">
                <label for="donvi">Đơn vị:</label>
                <input type="text" class="form-control" id="donvi">
              </div>
              -->
              <button type="submit" class="btn btn-default">Cập nhật</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
