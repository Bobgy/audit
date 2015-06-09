@extends('app')

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
            <form id="logInForm" role="form">
              <legend>登陆</legend>
              <div class="form-group">
                <input type="text" class="form-control input-lg" style="width:290px;" id="inputAccount" placeholder="Account">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;"  id="inputPassword" placeholder="Password">
              </div>
              <input type="submit" name="_loginBtn" value="登陆" class="btn btn-lg btn-wide btn-primary">
              <button class="btn btn-lg btn-wide btn-default" >
                <a href="register.html">注册</a>
              </button>
            </form>
            <div style="margin-left:200px">
              <a href="fetch.html" >忘记密码?</a>
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
