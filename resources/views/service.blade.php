@extends('layouts.template')
@section('content')
     <!-- Content -->
     <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(/images/banner/services.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white ">Services</h1>
					<div class="dlab-separator bg-primary"></div>
					<p class="text-white max-w800"></p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Services</li>
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
							<h4 class="widget-title">Get Our Company Profile</h4>   
							<div class="download-file">
								<ul>
									<li>
										<a href="files/pdf-sample.pdf" target="_blank">
											<span><i class="fa fa-file-pdf-o"></i></span>
											<p class="file-name">Company Profile</p>
											<i class="fa fa-download"></i>
										</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="widget  widget_getintuch">
							<h4 class="widget-title">Contact us</h4>
							<ul>
								<li><i class="ti-location-pin"></i><strong>address</strong> 204 Gravesend Road Willowvale, Harare Zimbabwe </li>
								<li><i class="ti-mobile"></i><strong>phone</strong>(+263 ) 242 620 517/8 <br>(24/7 Support Line)
									</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('/images/our-work/pic1.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="engine-diagnostics.html">
                                            Panel beating and Spray Painting </a></h4>
                                            <p class="text-center">We take pride in our state of the art panel beating and spray painting equipment. Our highly skilled employees coupled with our state of the art equipment ensure uniform high standards of workmanship. Our commercial spray booths are capable of containing both large and small vehicles and they are built to specifications compliant to the latest Safety & Health guidelines, suitable for the application of waterborne paint systems.</p>
                                            
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="#"><img src="{{asset('/images/our-work/fleet.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="#">Fleet Maintenance</a></h4>
                                        <p class="text-center">We handle all maintenance needs for your fleet and ensure that your fleet is kept running smooth. We provide suspension checks, wheel alignment and checks, vehicle diagnosis and general vehicle maintenance.    </p>
                                       
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dlab-box">
                                <div class="dlab-media"> <a href="#"><img src="{{asset('/images/our-work/pic2.jpg')}}" alt=""></a> </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title m-t20"><a href="/bentows">
                                            Vehicle Towing <a href="/bentows">(BenTows)</a> </a></h4>
                                            <p class="text-center">At the touch of a button, our towing team will be with you. We have a well-coordinated and responsive towing team and fleet to cater for you when your vehicle become immobile and needs towing.  Should your vehicle be involved in an accident and is immobile, should you need to be taken out of a ditch, should you need roadside assistance, we are there to assist you.  </p>
                                        
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