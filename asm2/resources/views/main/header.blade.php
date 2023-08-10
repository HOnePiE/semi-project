<!DOCTYPE html>
<html>

<head>
    <title>Surf Inn a Sports Category Bootstrap Responsive WebTemplate | Home :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Surf Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link
        href="{{ asset('//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,500i,600,600i,700,700i,800') }}"
        rel="stylesheet">
    <link
        href='{{ asset('//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic') }}'
        rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- header_top -->
    <div class="header" id="home">
        <div class="banner_header_top_agile_w3ls">
            <div class="header-top-wthree-agileits">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="{{ route('home') }}"> SunnyBee</a></h1>
                    </div>
                    <div class="header_left">
                        <ul>
                            <li><a class="shop" href="{{ route('shop') }}">Shop Now</a></li>
                            <li><a class="shop" href="{{ route('checkout') }}">Cart</a></li>
                            @if (Auth::check())
                                <li class="loginUser"><a class="sign" href="" data-toggle="modal"
                                        data-target="#myModal2">USER</a></li>

                                <form action="{{ route('logout') }}" method="POST">
                                    @method('DELETE')

                                    <button class="logoutUser " type="submit" value="LOG OUT">
                                        @csrf
                                </form>
                            @else
                                <li><a class="sign" href="{{ route('login') }}" data-toggle="modal"
                                        data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            @endif


                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                        <div class="top_nav_left">
                            <nav class="cl-effect-15" id="cl-effect-15">
                                <ul>
                                    <li class="active"><a href="{{ route('home') }}" data-hover="Home">Home</a></li>
                                    <li><a href="{{ asset('about') }}" data-hover="About">About</a></li>
                                    <li><a href="blog.html" data-hover="Blog">Blog</a></li>
                                    <li class="dropdown">
                                        <a href="services.html" data-hover="Drop Down" class="dropdown-toggle"
                                            data-toggle="dropdown">Drop Down <b class="fa fa-angle-down"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="404.html">Services</a></li>
                                            <li class="divider"></li>
                                            <li><a class="s-menu" href="#">Pages <b
                                                        class="fa fa-angle-right"></b></a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="404.html">Error</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="index.php?act=gallery">Gallery</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a href="{{ route('contact') }}" data-hover="Contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- search -->
                    <div class="search">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul>
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Click enter after typing...">
                            </form>
                        </div>
                    </div>
                    <!-- //search -->
                    <div class="clearfix"></div>
                </nav>
            </div>
        </div>
        <!-- banner -->
