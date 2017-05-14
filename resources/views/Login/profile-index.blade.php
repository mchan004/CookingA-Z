@extends('Login.Layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <ul class="pagination pagination-split">
              <li><a href="#">A</a></li>
              <li><a href="#">B</a></li>
              <li><a href="#">C</a></li>
              <li><a href="#">D</a></li>
              <li><a href="#">E</a></li>
              <li>...</li>
              <li><a href="#">W</a></li>
              <li><a href="#">X</a></li>
              <li><a href="#">Y</a></li>
              <li><a href="#">Z</a></li>
            </ul>
          </div>

          <div class="clearfix"></div>

          <?php foreach ($user as $key ): ?>
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
              <div class="well profile_view">
                <div class="col-sm-12">
                  <h4 class="brief"><i><?php echo App\User::find($key->id)->profile->chucvu ?></i></h4>
                  <div class="left col-xs-7">
                    <h2>{{$key->name}}</h2>
                    <p><strong>About: </strong> <?php echo App\User::find($key->id)->profile->gioithieu ?> </p>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-building"></i><?php echo App\User::find($key->id)->profile->diachi ?></li>
                      <li><i class="fa fa-phone"></i><?php echo App\User::find($key->id)->profile->sodienthoai?></li>
                    </ul>
                  </div>
                  <div class="right col-xs-5 text-center">
                    <img src="<?php echo App\User::find($key->id)->profile->hinhminhhoa ?>" alt="" class="img-circle img-responsive">
                  </div>
                </div>
                <div class="col-xs-12 bottom text-center">
                  <div class="col-xs-12 col-sm-6 emphasis">
                    <p class="ratings">
                      <a><?php echo App\User::find($key->id)->profile->danhgia ?></a>
                      @for ($i = 0; $i < App\User::find($key->id)->profile->danhgia; $i++)
                          <a href="#"><span class="fa fa-star"></span></a>
                      @endfor

                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 emphasis">
                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                      </i> <i class="fa fa-comments-o"></i> </button>
                    <a href="profile/<?php echo App\User::find($key->id)->profile->id ?>" type="button" class="btn btn-primary btn-xs">
                      <i class="fa fa-user"> </i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
