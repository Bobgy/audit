@extends('audit.navbar')

@section('content')
    <!-- Header space -->
	  <div style="height: 60px;"></div>
	  <!-- Main container -->
    <div class="container">
      <div class="row">
        <div class="logInForm">
          <div class="col-md-12" style="width:320px;" >
            <form id="resetForm" role="form">
              <legend>重置密码</legend>
              <div class="form-group">
                <input type="text" class="form-control input-lg" style="width:290px;" id="resetAccount" placeholder="Account">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" style="width:290px;" id="resetID" placeholder="ID code">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;"  id="resetPassword" placeholder="New password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;"  id="confirmPassword" placeholder="Confirm password">
              </div>
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
