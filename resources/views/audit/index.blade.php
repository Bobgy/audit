<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link href="{{ asset('/lib/Flat-UI-master/dist/css/vendor/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Flat UI -->
  <link href="{{ asset('/lib/css/my.css') }}" rel="stylesheet">

  <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

  <!-- Fonts -->
  <!-- link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="{{ asset('/lib/Flat-UI-master/dist/css/flat-ui.css') }}" rel="stylesheet">

</head>
  <body>
    <!-- Header space -->
    <div style="height: 60px;"></div>
    <!-- Main container -->
    <div class="container">
      <div class="row">
        <div class="logInForm">
          <div class="col-md-12" style="width:320px;" >
            <form action="login" method="post" id="logInForm" role="form">
              <legend>登陆</legend>
              <div class="form-group">
                <input type="text" class="form-control input-lg" style="width:290px;" name="_inputAccount" id="inputAccount" placeholder="Account">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" style="width:290px;" name="_inputPassword" id="inputPassword" placeholder="Password">
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="reset" name="_regBtn" value="重置" class="btn btn-lg btn-wide btn-info">
              <input type="submit" name="_loginBtn" value="登陆" class="btn btn-lg btn-wide btn-success">
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
    <nav class="my_navbar">
  </nav>
  </body>