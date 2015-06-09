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

	@yield('head')

</head>
<body>
	<!-- Nav bar Begin -->
	<nav class="my_navbar">
		<div class="top">
			<div class="header">
				<a href="./check_list"> 账单 </a>
				<a> 导出 </a>
				<a href="./search"> 搜索 </a>
			</div>
			<div id="user" class="ender">
				<a> Chaiyujin </a>
			</div>
			<div id="hidden_menu" class="hiddenMenu">
				<li id="log_out"> 注销 </li>
			</div>
		</div>
	</nav>
	<!-- Nav bar End -->

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('/lib/Flat-UI-master/dist/js/vendor/jquery.min.js') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- 用户的悬浮菜单 -->
	<script>
	  // 控制隐藏菜单
	  var is_shown = false;
	  var will_shown = false;
	  $('#hidden_menu').hide();
	  $('#user').mouseover(function () {
	    will_shown = true;
	    $('#hidden_menu').show(300);
	  });
	  $('#user').mouseout(function () {
	    will_shown = false;
	    setTimeout(function () {
	      if (!is_shown) {
	        $('#hidden_menu').hide(300);
	      }
	    }, 100);
	  });
	  $('#hidden_menu').mouseover(function () {
	    is_shown = true;
	  });
	  $('#hidden_menu').mouseout(function () {
	    is_shown = false;
	    setTimeout(function () {
	      if (!will_shown) {
	        $('#hidden_menu').hide(300);
	      }
	    }, 100);
	  });

	  // 登出
	  $("#log_out").click(function () {
	    // 请添加登出函数
	  });
	</script>

	@yield('script')

</body>
</html>
