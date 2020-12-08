@extends('layouts.template')
@section('content')
     <!-- Content -->
     <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(/template/images/main-slider/slide1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white ">All Services</h1>
					<div class="dlab-separator bg-primary"></div>
					<p class="text-white max-w800">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>All Services</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						
						<div class="widget">
							<h4 class="widget-title">Get your brochures</h4>
							<div class="download-file">
								<ul>
									<li>
										<a href="files/pdf-sample.pdf" target="_blank">
											<span><i class="fa fa-file-pdf-o"></i></span>
											<p class="file-name">Company Brochures</p>
											<i class="fa fa-download"></i>
										</a>
									</li>
									<li>
										<a href="files/pdf-sample.pdf" target="_blank">
											<span><i class="fa fa-file-pdf-o"></i></span>
											<p class="file-name">Company Info</p>
											<i class="fa fa-download"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget  widget_getintuch">
							<h4 class="widget-title">Contact us</h4>
							<ul>
								<li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
								<li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)<br>
									+ (20) 1234 0078 (Fax)</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic1.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="engine-diagnostics.html">
                                            SPRAY PAINTING</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic2.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="lube-oil-and-filters.html">CHECK SUSPENSION</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic3.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="belts-and-hoses.html">
                                            WHEEL CHECKING</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic4.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="air-conditioning.html">Air Conditioning</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic5.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="brake-repair.html">Brake Repair </a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('template/images/our-work/pic6.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="tire-and-wheel-services.html">Tire and Wheel Services</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                        <a href="#" class="site-button">More</a> 
									</div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				</div>
			<!-- About Company END -->
		</div>
        <!-- contact area  END -->
	</div>
    <!-- Content END-->
@endsection