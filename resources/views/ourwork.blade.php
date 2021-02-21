@extends('layouts.template')
@section('content')

    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(/images/banner/about.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Browse Our Work</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Our Work</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-area container">
        @foreach ($work as $work)
            @if ($work->type == 1)
                <div class="blog-post blog-md clearfix date-style-2">
                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                        <video width="320" height="240" controls>
                            <source src="storage\{{ $work->image_path }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="dlab-post-info">
                        <div class="dlab-post-title ">
                            <h3 class="post-title"><a href="#">{{ $work->title }}</a></h3>
                        </div>
                        <div class="dlab-post-meta">
                            <ul>
                                <li class="post-date"> <i class="ti-calendar"></i><strong>Benoisen</strong> <span>Motors
                                    </span> </li>
                                <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Admin</a> </li>
                                <li class="post-comment"><i class="fa fa-comments-o"></i> <a href="#">0</a> </li>
                            </ul>
                        </div>
                        <div class="dlab-post-text">
                            <p>{{ $work->description }}</p>
                        </div>


                    </div>
                </div>
            @else
                <div class="blog-post blog-md clearfix date-style-2">
                    <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                src="storage\{{ $work->image_path }}" alt=""></a> </div>
                    <div class="dlab-post-info">
                        <div class="dlab-post-title ">
                            <h3 class="post-title"><a href="#">{{ $work->title }}</a></h3>
                        </div>
                        <div class="dlab-post-meta ">
                            <ul>
                                <li class="post-date"> <i class="ti-calendar"></i><strong>Benoisen</strong> <span>Motors
                                    </span> </li>
                                <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Admin</a> </li>
                                <li class="post-comment"><i class="fa fa-comments-o"></i> <a href="#">0</a> </li>
                            </ul>
                        </div>
                        <div class="dlab-post-text">
                            <p>{{ $work->description }}</p>
                        </div>


                    </div>
                </div>
            @endif

        @endforeach

        <!-- Blog half image END -->
        <!-- Pagination  -->

        <!-- Pagination END -->
    </div>

@endsection
