@extends('audit.navbar')

@section('head')
<link href="{{ asset('/lib/Flat-UI-master/dist/css/flat-ui.css') }}" rel="stylesheet">
@endsection

@section('content')
  <body>
    <!-- Header space -->
	  <div style="height: 60px;"></div>
	  <!-- Main container -->
    <div class="container">
      <div class="row">
        <div class="logInForm">
          <div class="col-md-12" style="width:320px;" >
            <form  action="login" method="post" id="logInForm" role="form">
              <legend>登陆</legend>
              <div class="form-group">
                <input type="text" class="form-control input-lg" style="width:290px;" id="inputAccount" placeholder="Account">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;"  id="inputPassword" placeholder="Password">
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="_loginBtn" value="登陆" class="btn btn-lg btn-wide btn-primary">
            </form>
            <div style="margin-left: 10px">
              <a href="fetch" >忘记密码?</a>
            </div>
          </div>
        </div>
        <div class="logInPic">
          <iframe height="490px" width="800px" frameborder="0" marginheight="0px" marginwidth="0px" scrolling="no" src="{{ asset('/res/nico.jpg') }}">
          </iframe>
        </div>
      </div>
    </div>
  </body>
@endsection
