@extends('frontend.layouts.master')

@section('content')
    <section class="slider">
        {{-- <div class="single-slider" style="background-image: url('assets/vendor/img/slider2.jpg')"> --}}
        <div class="single-slider" style="background-image: url('assets/images/header3.jpeg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>
                                Yuk, Ceritakan <span>Kegelisahanmu</span> Dapatkan Solusi Terbaik dari Para Psikolog Professional
                            </h1>
                            <p class="hero_desc">
                               Kami memberikan layanan psikolog profesional secara online counseling dan
                               offline counseling untuk menjadi teman berbagi cerita atas solusi setiap masalahmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-schedule">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <div class="single-content">
                                    <span>- Waktu yang Fleksibel</span>
                                    <h4>Tersedia Konseling Online & Offline</h4>
                                    <p>
                                        Kamu bisa memilih waktu konseling, yang disesuaikan dengan kenyamananmu bercerita.
                                    </p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-schedule">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    <span>- Para Psikolog Profesional</span>
                                    <h4>Berpengalaman Lebih dari 5 Tahun</h4>
                                   <p>
                                    Psikolog yang berpengalaman memberikan kamu ketenangan dalam bercerita, berkeluh kesah dan mencari solusi
                                   </p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-schedule">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <span>- Topik Masalah yang Bervariasi</span>
                                    <h4>Pilih Topik Sesuai Kebutuhanmu</h4>
                                    <p>
                                        Setiap individu memiliki masalah yang berbeda-beda, untuk itu kami sediakan banyak pilihan topik masalah.
                                    </p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Kami Selalu Ada untuk Menjadi Temanmu Bercerita</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="single-features">
                        <div class="signle-icon">
                            <img src="{{ asset('assets/images/offline_counseling.png') }}" alt="">
                        </div>
                        <h3>Offline Counseling</h3>
                        <p>
                            Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam
                            vulputate.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="custom-single-features">
                        <div class="signle-icon">
                            <i>
                                <img src="{{ asset('assets/images/brain1.png') }}">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-features">
                        <div class="signle-icon">
                            <img src="{{ asset('assets/images/online_counseling.png') }}" alt="">
                        </div>
                        <h3>Online Counseling</h3>
                        <p>
                            Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam
                            vulputate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-hospital"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-users"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-face-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-calendar-days"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="{{ asset('assets/images/brain1.png') }}" width="50">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas pharetra antege vel est lobortis, a commodo magna
                            rhoncus. In quis nisi non emet quam pharetra commodo.
                        </p>
                        <p>
                            Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos himenaeos.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li>
                                        <i class="fa fa-caret-right"></i>Maecenas vitae luctus
                                        nibh.
                                    </li>
                                    <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>Aliquam feugiat interdum.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li>
                                        <i class="fa fa-caret-right"></i>Maecenas vitae luctus
                                        nibh.
                                    </li>
                                    <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>Aliquam feugiat interdum.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="choose-right">
                        <div class="video-image">
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>

                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                            porttitor dictum turpis nec gravida.
                        </p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                            <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Medical News.</h2>
                        <img src="{{ asset('assets/images/brain1.png') }}" width="50">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('assets/vendor/img/blog1.jpg') }}" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">22 Aug, 2020</div>
                                <h2>
                                    <a href="blog-single.html">We have annnocuced our new product.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('assets/vendor/img/blog2.jpg') }}" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">15 Jul, 2020</div>
                                <h2>
                                    <a href="blog-single.html">Top five way for solving teeth problems.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('assets/vendor/img/blog3.jpg') }}" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 Jan, 2020</div>
                                <h2>
                                    <a href="blog-single.html">We provide highly business soliutions.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{ asset('assets/images/brain1.png') }}" width="50">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-list-check"></i>
                        <h4><a href="service-details.html">General Treatment</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-tooth"></i>
                        <h4><a href="service-details.html">Teeth Whitening</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-heart"></i>
                        <h4><a href="service-details.html">Heart Surgery</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-ear-listen"></i>
                        <h4><a href="service-details.html">Ear Treatment</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-eye"></i>
                        <h4><a href="service-details.html">Vision Problems</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-vials"></i>
                        <h4><a href="service-details.html">Blood Transfusion</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Provide You The Best Treatment In Resonable Price</h2>
                        <img src="{{ asset('assets/vendor/img/section-img.png') }}" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <i class="fa-solid fa-cut"></i>
                            </div>
                            <h4 class="title">Plastic Suggery</h4>
                            <div class="price">
                                <p class="amount">$199<span>/ Per Visit</span></p>
                            </div>
                        </div>

                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Cubitur sollicitudin
                                fentum
                            </li>
                            <li class="cross">
                                <i class="icofont icofont-ui-close"></i>Nullam interdum enim
                            </li>
                            <li class="cross">
                                <i class="icofont icofont-ui-close"></i>Donec ultricies metus
                            </li>
                            <li class="cross">
                                <i class="icofont icofont-ui-close"></i>Pellentesque eget nibh
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <i class="fa-solid fa-tooth"></i>
                            </div>
                            <h4 class="title">Teeth Whitening</h4>
                            <div class="price">
                                <p class="amount">$299<span>/ Per Visit</span></p>
                            </div>
                        </div>

                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Cubitur sollicitudin
                                fentum
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Nullam interdum enim
                            </li>
                            <li class="cross">
                                <i class="icofont icofont-ui-close"></i>Donec ultricies metus
                            </li>
                            <li class="cross">
                                <i class="icofont icofont-ui-close"></i>Pellentesque eget nibh
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                            <h4 class="title">Heart Suggery</h4>
                            <div class="price">
                                <p class="amount">$399<span>/ Per Visit</span></p>
                            </div>
                        </div>

                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Cubitur sollicitudin
                                fentum
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Nullam interdum enim
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Donec ultricies metus
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Pellentesque eget nibh
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonials overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>What Our Patients Say About Our Medical Treatments</h2>
                        <img src="{{ asset('assets/vendor/img/section-img2.png') }}" alt="#" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel testimonial-slider">
                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi1.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Ruhfayed Sakib</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi2.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Shakil Hossain</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi3.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Naimur Rahman</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi1.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Ruhfayed Sakib</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi2.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Shakil Hossain</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi3.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Naimur Rahman</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi1.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Ruhfayed Sakib</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi2.png') }}" alt="#" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur eliet adipiscing.
                                Aliquam nec suscipit turpis, vel pretium eros.
                            </p>
                            <h4 class="name">Naimur Rahman</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Maintain Support System And Healing Properly To Your Mental Illness</h2>
                        <img src="{{ asset('assets/images/brain1.png') }}" width="50">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf1.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf2.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf3.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf4.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf1.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf2.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf3.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ asset('assets/vendor/img/pf4.jpg') }}" alt="#" />
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="departments section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Departments To Diagnose Your Diseases</h2>
                        <img src="{{ asset('assets/vendor/img/section-img.png') }}" alt="#" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="department-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#t-tab1" role="tab"><i
                                        class="fa-solid fa-heart-pulse"></i><span class="first">Cardiac
                                        Clinic</span><span class="second">Lorem Sit</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#t-tab2" role="tab"><i
                                        class="fa-solid fa-brain"></i><span class="first">Neurology</span><span
                                        class="second">Quis Est</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#t-tab3" role="tab"><i
                                        class="fa-solid fa-tooth"></i><span class="first">Dentistry</span><span
                                        class="second">Sit Dolor</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#t-tab4" role="tab"><i
                                        class="fa-solid fa-heart-pulse"></i><span
                                        class="first">Gastroenterology</span><span class="second">Lorem
                                        Sit</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#t-tab5" role="tab"><i
                                        class="fa-solid fa-bone"></i><span class="first">Orthopedagogy</span><span
                                        class="second">Lorem Sit</span></a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="t-tab1" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Cardiac Clinic</h3>
                                            <p class="p1">
                                                â€œVivamus ut tellus sed tellus finibus egestas.
                                                Mauris adipiscing aliquet et nisl nec eleifend
                                                adipiscing elit.â€
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Maecenas pharetra ante vel est lobortis, a
                                                commodo magna rhoncus. In quis nisi non quam pharetra
                                                commodo.
                                            </p>
                                            <ul class="list">
                                                <li>
                                                    <i class="fa fa-check"></i>Maecenas vitae luctus
                                                    nibh. Curabitur pharetra luctus est, sit amet
                                                    aliquam ex posuere id.
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Maecenas pharetra ante
                                                    vel est lobortis
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="{{ asset('assets/vendor/img/department.jpg') }}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="t-tab2" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Neurology</h3>
                                            <p class="p1">
                                                â€œVivamus ut tellus sed tellus finibus egestas.
                                                Mauris adipiscing aliquet et nisl nec eleifend
                                                adipiscing elit.â€
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Maecenas pharetra ante vel est lobortis, a
                                                commodo magna rhoncus. In quis nisi non quam pharetra
                                                commodo.
                                            </p>
                                            <ul class="list">
                                                <li>
                                                    <i class="fa fa-check"></i>Maecenas vitae luctus
                                                    nibh. Curabitur pharetra luctus est, sit amet
                                                    aliquam ex posuere id.
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Maecenas pharetra ante
                                                    vel est lobortis
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="{{ asset('assets/vendor/img/department.jpg') }}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="t-tab3" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Dentistry</h3>
                                            <p class="p1">
                                                â€œVivamus ut tellus sed tellus finibus egestas.
                                                Mauris adipiscing aliquet et nisl nec eleifend
                                                adipiscing elit.â€
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Maecenas pharetra ante vel est lobortis, a
                                                commodo magna rhoncus. In quis nisi non quam pharetra
                                                commodo.
                                            </p>
                                            <ul class="list">
                                                <li>
                                                    <i class="fa fa-check"></i>Maecenas vitae luctus
                                                    nibh. Curabitur pharetra luctus est, sit amet
                                                    aliquam ex posuere id.
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Maecenas pharetra ante
                                                    vel est lobortis
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="{{ asset('assets/vendor/img/department.jpg') }}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="t-tab4" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Gastroenterology</h3>
                                            <p class="p1">
                                                â€œVivamus ut tellus sed tellus finibus egestas.
                                                Mauris adipiscing aliquet et nisl nec eleifend
                                                adipiscing elit.â€
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Maecenas pharetra ante vel est lobortis, a
                                                commodo magna rhoncus. In quis nisi non quam pharetra
                                                commodo.
                                            </p>
                                            <ul class="list">
                                                <li>
                                                    <i class="fa fa-check"></i>Maecenas vitae luctus
                                                    nibh. Curabitur pharetra luctus est, sit amet
                                                    aliquam ex posuere id.
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Maecenas pharetra ante
                                                    vel est lobortis
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="{{ asset('assets/vendor/img/department.jpg') }}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="t-tab5" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Orthopedagogy</h3>
                                            <p class="p1">
                                                â€œVivamus ut tellus sed tellus finibus egestas.
                                                Mauris adipiscing aliquet et nisl nec eleifend
                                                adipiscing elit.â€
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Maecenas pharetra ante vel est lobortis, a
                                                commodo magna rhoncus. In quis nisi non quam pharetra
                                                commodo.
                                            </p>
                                            <ul class="list">
                                                <li>
                                                    <i class="fa fa-check"></i>Maecenas vitae luctus
                                                    nibh. Curabitur pharetra luctus est, sit amet
                                                    aliquam ex posuere id.
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Maecenas pharetra ante
                                                    vel est lobortis
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit
                                                    amet, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="{{ asset('assets/vendor/img/department.jpg') }}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Have Specialist Doctors To Solve Your Problems</h2>
                        <img src="{{ asset('assets/vendor/img/section-img2.png') }}" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team1.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Collis Molate</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Domani Plavon</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team3.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Dental Surgeon</p>
                            <h2><a href="doctor-details.html">John Mard</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team4.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Amanal Frond</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
