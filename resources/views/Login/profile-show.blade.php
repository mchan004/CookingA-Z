@extends('Login.Layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>User <small>Activity report</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="img-responsive avatar-view" src="{{$profile->hinhminhhoa}}" alt="Avatar" title="Change the avatar">
            </div>
          </div>
          <h3><?php echo App\profile::find($profile->id)->user->name?></h3>

          <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> {{$profile->diachi}}</li>

            <li>
              <i class="fa fa-briefcase user-profile-icon"></i> {{$profile->chucvu}}
            </li>
          </ul>

          <a class="btn btn-success"href="{{$profile->id}}/edit"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
          <br>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
