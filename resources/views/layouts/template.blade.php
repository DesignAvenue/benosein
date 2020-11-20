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
	<title>Auto Care - Car Services Template</title>
	
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
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
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
                            <li class="active"> <a href="/">Home</a>
                            </li>
                            <li> <a href="/service">Service</a>
                              
                            </li>
                            <li> <a href="/about">About</a>
                              
                            </li>
                            <li> <a href="/news">News</a>
                              
                            </li>
                            <li> <a href="/contact">Contact Us</a>
                              
                            </li>
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
        <!-- newsletter part -->
        <div class="bg-primary dlab-newsletter">
            <div class="container equal-wraper">
				<form class="dzSubscribe" action="https://autocare.dexignlab.com/xhtml/script/mailchamp.php" method="post">
					<div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                <div class="icon-lg text-white radius">
									<i class="ti-email"></i>
								</div>
                                <div class="icon-content"> <strong class="text-black text-uppercase font-18">Subscribe</strong>
                                    <h2 class="dlab-tilte text-uppercase">Our Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="dzSubscribeMsg"></div>
							<div class="input-group equal-col p-t40  p-b10">
                                <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
                            <div class="equal-col p-t40 p-b10 skew-subscribe">
                                <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> <span>Subscribe</span><i class="fa fa-angle-right"></i> </button>
                            </div>
                        </div>
					</div>
				</form>
            </div>
        </div>
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="{{asset('template/images/loggest.png')}}" alt=""></div>
                            <p><strong>Auto Care</strong> ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.ipsum dolor sit amet, consectetuer.</p>
                            <ul class="dlab-social-icon dez-border">
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">Recent Post</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                <div class="dlab-post-media"> <img src="{{asset('template/images/blog/recent-blog/pic1.jpg')}}" alt="" width="200" height="143"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="/">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="{{asset('template/images/blog/recent-blog/pic2.jpg')}}" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="/">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="{{asset('template/images/blog/recent-blog/pic3.jpg')}}" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title  text-uppercase"><a href="/">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                <li><a href="/">Engine Diagnostics</a></li>
                                <li><a href="/">Lube, Oil and Filters</a></li>
                                <li><a href="/">Belts and Hoses</a></li>
                                <li><a href="/">Air Conditioning</a></li>
                                <li><a href="/">Brake Repair</a></li>
                                <li><a href="/">Tire And Wheel</a></li>
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
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)</li>
                                <li><i class="ti-printer"></i><strong>FAX</strong>(123) 123-4567</li>
                                <li><i class="ti-email"></i><strong>email</strong>info@demo.com</li>
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
