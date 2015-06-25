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
  <script src="{{ asset('/lib/Flat-UI-master/dist/js/vendor/jquery.min.js') }}"></script>
  <link href="{{ asset('/lib/Flat-UI-master/dist/css/flat-ui.css') }}" rel="stylesheet">

</head>
<body>
  <!-- Header space -->
  <div style="height: 60px;"></div>
  <!-- Main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="" style="/* width:320px; */">
          <form action="" method="post" id="logInForm" role="form">
            <legend>登陆</legend>
            <div class="form-group">
              <input type="text" class="form-control input-lg" style="" name="_inputAccount" id="inputAccount" placeholder="Account">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" style="" name="_inputPassword" id="inputPassword" placeholder="Password">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
				<input type="reset" value="重置" name="_regBtn" class="col-md-5 btn btn-lg btn-info">
				<input type="submit" value="登陆" name="_loginBtn" class="col-md-5 col-md-offset-2 btn btn-lg btn-success">
			</div>
          </form>
        </div>
      </div>
      <div class="col-md-9">
        <iframe height="490px" width="100%" frameborder="0" marginheight="0px" marginwidth="0px" scrolling="no" src="{{ asset('/res/nico.jpg') }}">
        </iframe>
      </div>
    </div>
  </div>
  <nav class="my_navbar">
  </nav>
  @include('audit.errorbox')
</body>
