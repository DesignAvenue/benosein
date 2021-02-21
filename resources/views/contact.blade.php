@extends('layouts.template')
@section('content')
    <!-- Content -->

    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(/images/banner/contact.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-8">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Send Us A Message </h2>
                        <div class="dzFormMsg"></div>
                        <form method="POST" class="dzForm" action="{{ route('mail') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" required class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" required
                                                placeholder="Your Email Id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phone" type="text" required class="form-control"
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="subject" type="text" required class="form-control"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="message" rows="4" class="form-control" required
                                                placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button ">
                                        <span>Submit</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <!-- right part start -->
                <div class="col-lg-4 d-lg-flex">
                    <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                        <h2 class="m-b10">Quick Contact</h2>
                        <p>If you have any questions simply use the following contact details.</p>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper left m-b30">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                            class="ti-location-pin"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                    <p>204 Gravesend Road
                                        Willowvale,
                                        Harare Zimbabwe</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left  m-b30">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                            class="ti-email"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                    <a href="mailto:adminsales@benosien.co.zw">
                                        <p>adminsales@benosien.co.zw</p>
                                    </a>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                            class="ti-mobile"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                    <a href="tel:08677002224">
                                        <p> (+263 ) 8677 002 224</p>
                                    </a>
                                    <a href="tel:242620517">
                                        <p>(+263 ) 242 620 517/8</p>
                                    </a>
                                    <a href="tel:0772211014">
                                        <p> (+263 )772 211 014</p>
                                    </a>

                                    <a href="tel: 0772269124">
                                        <p> (+263) 772 269 124</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="m-t20">
                            <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                                <li><a href="https://www.facebook.com/benosien" class="fa fa-facebook bg-primary"></a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right part END -->
            </div>
            <div class="row m-b30">
                <div class="col-lg-12">
                    <!-- Map part start -->
                    <h2>Our Location</h2>
                    <center>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="1080" height="380" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=204%20Gravesend%20Road%20Willowvale%2C%20Harare&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://www.whatismyip-address.com"></a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 380px;
                                    width: 1080px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 380px;
                                    width: 1080px;
                                }

                            </style>
                        </div>
                    </center>
                    <!-- Map part END -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content END-->


@endsection
