<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:title" content="Auto Care - Car Services Template" />
	<meta property="og:description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Benosien Motors Panel Beating & Spray Painting & Towing</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
		
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/combine.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/templete.min.css')}}">
	<link class="skin"  rel="stylesheet" type="text/css" href="{{asset('template/css/skin/skin-1.css')}}">
	<!-- Revolution Slider Css -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-2976c9c5-05b7-4ac0-8dd3-94f2dd71865a"></div>


    {{-- <link rel="stylesheet" type="text/css" href="{{asset('template/plugins/revolution/css/revolution.min.css')}}">  --}}
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dlab-topbar-left"> </div>
                    <div class="dlab-topbar-right">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fwww.facebook.com%2Fbenosien" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="/"><img src="{{asset('template/images/loggest.png')}}" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav nav-style">
                            @if (Route::current()->getName() == "/")
                            <li class="active"> <a href="/">Home</a> </li>
                                @else
                                <li> <a href="/">Home</a> </li>
                                @endif
                                @if (Route::current()->getName() == "about")
                            <li class="active"> <a href="/about">About</a></li>
                                @else
                                <li> <a href="/about">About</a> </li>
                                @endif
                                @if (Route::current()->getName() == "service")
                            <li class="active"> <a href="/service">Services</a></li>
                                @else
                                <li> <a href="/service">Services</a> </li>
                                @endif
                                @if (Route::current()->getName() == "ourwork")
                            <li class="active"> <a href="/ourwork">Our Work</a></li>
                            @else
                                <li> <a href="/ourwork">Our Work</a> </li>
                             @endif
                             @if (Route::current()->getName() == "team")
                             <li class="active"> <a href="/team">OurTeam</a></li>
                             @else
                                 <li> <a href="/team">OurTeam</a> </li>
                              @endif
                             @if (Route::current()->getName() == "contact")
                            <li class="active"> <a href="/contact">Contact Us</a></li>
                            @else
                                <li> <a href="/contact">Contact Us</a> </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
    @yield('content')
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="{{asset('template/images/loggest.png')}}" alt=""></div>
                            <p><strong>Benosien Motors</strong> offers a one stop auto body repair services. Our business scope covers from passenger vehicles to commercial vehicles .We have managed to provide services that have always satisfied our Customers due to well Advanced and modernized equipment used by well skilled personnel In our workshop</p>
                            <ul class="dlab-social-icon dez-border">
                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fwww.facebook.com%2Fbenosien"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">Our Work</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <div class="widget-post-bx">
                                @foreach ($works as $work)
                                <div class="widget-post clearfix">
                                <div class="dlab-post-media"> <img src="storage\{{$work->image_path}}" alt="" width="200" height="143"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="/ourwork">{{$work->title}}</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="ourwork">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              
 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><a href="/service">SPRAY PAINTING & PANEL BEATING</a></li>
                                <li><a href="/service">VEHICLE TOWING</a></li>
                                <li><a href="/service">VEHICLE DIAGNOSTICS</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact us</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> 204 Gravesend road Harare ,Zimbabwe</li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>+263 772 211 014</li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>+263 772 269124</li>
                                <li><i class="ti-email"></i><strong>email</strong>adminsales@benosien.co.zw</li>
                                <li><i class="ti-email"></i><strong>email</strong>tows@benosien.co.zw</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left"> 
						<span>© Copyright 2020</span>
					</div>
					<div class="col-lg-4 col-md-4 text-center"> 
						<a href="https://designave.co.zw/"><span> Design With <i class="ti-heart text-primary heart"></i> By DesignAve </span> </a>
					</div>
					<div class="col-lg-4 col-md-4 text-right"> 
						<a href="/about"> About Us</a>
						
						<a href="/contact"> Contact Us</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style5" ></button>
</div>

<!-- JavaScript  files ========================================= -->
<script src="{{asset('template/js/combining.js')}}"></script><!-- COMBINING JS  -->
<!-- REVOLUTION JS FILES -->
<script src="{{asset('template/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('template/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('template/js/rev.slider.js')}}"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
</body>
</html>
