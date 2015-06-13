@extends('audit.navbar')

@section('head')
<link href="{{ asset('/lib/Flat-UI-master/dist/css/flat-ui.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Header space -->
    <div style="height: 60px;"></div>
    <!-- Main container -->
    <div class="container">
      @if (isset($errorMessage))
        {{$errorMessage}}
      @endif
      <div class="row">
        <div class="logInForm">
          <div class="col-md-12" style="width:320px;" >
            <form id="resetForm" role="form" method="post">
              <legend>修改密码</legend>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;" id="oldPassword" name="oldPassword" placeholder="Old password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;" id="newPassword" name="newPassword" placeholder="New password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="_loginBtn" value="修改" class="btn btn-lg btn-wide btn-primary">
            </form>
          </div>
        </div>
        <div class="logInPic">
          <iframe height="490px" width="800px" frameborder="0" marginheight="0px" marginwidth="0px" scrolling="no" src="{{ asset('/res/reset.jpg') }}">
          </iframe>
        </div>
      </div>
    </div>
@endsection
