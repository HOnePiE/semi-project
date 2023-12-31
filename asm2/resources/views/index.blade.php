<!DOCTYPE html>
<html>

<head>
	<title>SunnyBee shop | @yield('title')</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Surf Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('css/about.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/contact.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/checkout.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/about.css')}}" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="{{asset('//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,500i,600,600i,700,700i,800')}}" rel="stylesheet">
	<link href='{{asset('//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic')}}'
	    rel='stylesheet' type='text/css'>
</head>

<body>
@include('main.header')

@yield('page')


@include('main.footer')

</body>
</html>