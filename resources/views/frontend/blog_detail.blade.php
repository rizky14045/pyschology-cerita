@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Single</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Blog Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog1.jpg') }}" alt="#" />
                                </div>

                                <h1 class="news-title">
                                    <a href="news-single.html">More than 80 clinical trials launch to test of the
                                        coronavirus .</a>
                                </h1>

                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#"><img src="{{ asset('assets/vendor/img/author1.jpg') }}"
                                                    alt="#" />Naimur Rahman</a></span>
                                        <span class="date"><i class="fa fa-clock-o"></i>03 Feb 2019</span>
                                    </div>
                                    <div class="meta-right">
                                        {{-- <span class="comments"><a href="#"><i class="fa fa-comments"></i>05
                                                Comments</a></span> --}}
                                        <span class="views"><i class="fa fa-eye"></i>33K Views</span>
                                    </div>
                                </div>

                                <div class="news-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspendisse facilisis ultricies tortor, nec sollicitudin
                                        lorem sagittis vitae. Curabitur rhoncus commodo rutrum.
                                        Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus
                                        pulvinar, laoreet dolor quis, pellentesque ante. Cras
                                        nulla orci, pharetra at dictum consequat, pretium pretium
                                        nulla. Suspendisse porttitor nunc a sodales tempor. Mauris
                                        sed felis maximus, interdum metus vel, tincidunt diam.
                                    </p>
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus
                                        pulvinar, laoreet dolor quis, pellentesque ante. Cras
                                        nulla orci, pharetra at dictum consequat, pretium pretium
                                        nulla. Suspendisse porttitor nunc a sodales tempor. Mauris
                                        sed felis maximus, interdum metus vel, tincidunt diam. Nam
                                        ac risus vitae sem vehicula egestas. Sed velit nulla,
                                        viverra non commod
                                    </p>
                                    <div class="image-gallery">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('assets/vendor/img/blog2.jpg') }}" alt="#" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('assets/vendor/img/blog3.jpg') }}" alt="#" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspendisse facilisis ultricies tortor, nec sollicitudin
                                        lorem sagittis vitae. Curabitur rhoncus commodo rutrum.
                                        Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus
                                        pulvinar, laoreet dolor quis, pellentesque ante. Cras
                                        nulla orci, pharetra at dictum consequat, pretium pretium
                                        nulla. Suspendisse porttitor nunc a sodales tempor. Mauris
                                        sed felis maximus, interdum metus vel, tincidunt diam.
                                    </p>
                                    <blockquote class="overlay">
                                        <p>
                                            Aliquam nec lacus pulvinar, laoreet dolor quis,
                                            pellentesque ante. Cras nulla orci, pharetra at dictum
                                            consequat, pretium pretium nulla. Suspendisse porttitor
                                            nunc a sodales tempor. Mauris sed felis maximus,
                                            interdum metus vel, tincidunt diam. Nam ac risus vitae
                                            sem vehicula egestas. Sed velit nulla, viverra non
                                            commodo et, sodales
                                        </p>
                                    </blockquote>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspendisse facilisis ultricies tortor, nec sollicitudin
                                        lorem sagittis vitae. Curabitur rhoncus commodo rutrum.
                                        Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus
                                        pulvinar, laoreet dolor quis, pellentesque ante. Cras
                                        nulla orci, pharetra at dictum consequat, pretium pretium
                                        nulla. Suspendisse porttitor nunc a sodales tempor. Mauris
                                        sed felis maximus, interdum metus vel, tincidunt diam. Nam
                                        ac risus vitae sem vehicula egestas. Sed velit nulla,
                                        viverra non commodo et, sodales id dui.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspendisse facilisis ultricies tortor, nec sollicitudin
                                        lorem sagittis vitae. Curabitur rhoncus commodo rutrum.
                                        Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus
                                        pulvinar, laoreet dolor quis, pellentesque ante. Cras
                                        nulla orci, pharetra at dictum consequat, pretium pretium
                                        nulla. Suspendisse
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">

                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-sidebar1.jpg') }}" alt="#" />
                                </div>
                                <div class="content">
                                    <h5><a href="#">We have annnocuced our new product.</a></h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                                            2020
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-sidebar2.jpg') }}" alt="#" />
                                </div>
                                <div class="content">
                                    <h5>
                                        <a href="#">Top five way for solving teeth problems.</a>
                                    </h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>Mar 05,
                                            2019
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>59
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-sidebar3.jpg') }}" alt="#" />
                                </div>
                                <div class="content">
                                    <h5>
                                        <a href="#">We provide highly business soliutions.</a>
                                    </h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>June
                                            09, 2019
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>44
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
