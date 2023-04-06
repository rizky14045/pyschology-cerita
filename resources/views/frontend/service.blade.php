@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Layanan</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Beranda</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Layanan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-single section">
        <div class="container">
            <div class="single-main">
                <div class="news-head">
                    <img src="{{ asset('assets/vendor/img/album7.jpg') }}" alt="#" />
                </div>

                <h1 class="service-title">
                    <a href="news-single.html">Our Psycholog always provide good services</a>
                </h1>

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
                        sed felis maximus, interdum metus vel, tincidunt diam.
                    </p>
                    <div class="image-gallery">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-image">
                                    <img src="{{ asset('assets/vendor/img/album3.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <span class="ver-line"></span>
                                <h2 class="service-sub-title-l">Offline Consultation</h2>
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
                            </div>
                        </div>
                    </div>
                    <div class="image-gallery mt-5 text-right">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <span class="ver-line-right"></span>
                                <h2 class="service-sub-title-r">Online Consultation</h2>
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
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-image">
                                    <img src="{{ asset('assets/vendor/img/album1.jpg') }}" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
