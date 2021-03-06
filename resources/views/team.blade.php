@extends('layouts.template')
@section('content')
    <!-- Content -->
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(/images/banner/team.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Meet Our Team</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Meet Our Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content bg-white">
            <!-- Team member -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-content text-center ">
						<div class="row">
							
							<div class="col-md-4 ">
								<div class="dlab-box m-b30">
									<div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460" alt="" src="{{asset('/template/images/our-team/pic2.jpg')}}"> </a>
										
									</div>
									<div class="p-a10">
										<h4 class="dlab-title text-uppercase m-b5"><a href="javascript:;">Sales and Marketing Executive</a></h4>
										<span class="dlab-member-position"></span> 
									</div>
								</div>
							</div>
							<div class=" col-md-4 ">
								<div class="dlab-box m-b30">
									<div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460" alt="" src="{{asset('template/images/our-team/pic3.jpg')}}"> </a>
										<div class="dlab-info-has skew-has bg-primary">
											
										</div>
									</div>
									<div class="p-a10 bg-white">
										<h4 class="dlab-title text-uppercase m-b5"><a href="javascript:;">Operations Executive</a></h4>
										<span class="dlab-member-position"></span> 
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dlab-box m-b10">
									<div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460" alt="" src="{{asset('/template/images/our-team/pic4.jpg')}}"> </a>
										
									</div>
									<div class="p-a10">
										<h4 class="dlab-title text-uppercase m-b5"><a href="javascript:;">Customer Liaison Officer</a></h4>
										<span class="dlab-member-position"></span> 
									</div>
								</div>
							</div>
							<div class=" col-md-6 ">
								<div class="dlab-box m-b30">
									<div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460" alt="" src="{{asset('/template/images/our-team/pic5.jpg')}}"> </a>
										
									</div>
									<div class="p-a10">
										<h4 class="dlab-title text-uppercase m-b5"><a href="javascript:;">Sales & AdminTeam</a></h4>
										<span class="dlab-member-position"></span> 
									</div>
									
								</div>
							</div>
						
							<div class=" col-md-6 ">
								<div class="dlab-box m-b30">
									<div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460" alt="" src="{{asset('/template/images/our-team/pic6.jpg')}}"> </a>
									
									</div>
									<div class="p-a10">
										<h4 class="dlab-title text-uppercase m-b5"><a href="javascript:;">Operations Team</a></h4>
										<span class="dlab-member-position"></span> 
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Team member END -->
        </div>
        <!-- contact area  END -->

    <!-- Content END-->
@endsection