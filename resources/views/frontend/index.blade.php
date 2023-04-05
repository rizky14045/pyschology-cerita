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
                                Yuk, Ceritakan <span>Kegelisahanmu</span> Dapatkan Solusi Terbaik dari Para Psikolog
                                Professional
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
                                    <i class="icofont-ui-clock"></i>
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
                                        Psikolog yang berpengalaman memberikan kamu ketenangan dalam bercerita, berkeluh
                                        kesah dan mencari solusi
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
                                        Setiap individu memiliki masalah yang berbeda-beda, untuk itu kami sediakan banyak
                                        pilihan topik masalah.
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
                            <img src="{{ asset('assets/images/offline-woman.jpg') }}" alt="">
                        </div>
                        <h3>Offline Counselling
                        </h3>
                        <p>
                            Layanan konsultasi psikolog secara tatap muka langsung yang dapat memberikan kenyamanan lebih
                            bagi kamu dalam bercerita.
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
                            <img src="{{ asset('assets/images/online-woman.jpg') }}" alt="#">
                        </div>
                        <h3>Online Counselling</h3>
                        <p>
                            Layanan konsultasi psikolog secara daring yang dapat dilakukan fleksibel dimanapun kamu berada
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-white">
                        <h3 class="text-white">Langkah Mudah Bercerita dengan Kami untuk Membuat Kamu Lebih Bersemangat!
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-calendar-days"></i>
                        <div class="content">
                            <span>Hubungi Customer Service</span>
                            <p>Kami bisa kamu hubungi kapan saja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-face-smile"></i>
                        <div class="content">
                            <span>Tentukan Topik Masalah</span>
                            <p>Pilih topik permasalahan yang sedang kamu alami saat ini</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fa-solid fa-users"></i>
                        <div class="content">
                            <span>Konseling Berjalan </span>
                            <p>Sudah terhubung dengan kami, maka kamu bisa langsung melakukan konseling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h3>Jika kamu ingin langsung bercerita kegelisahanmu pada kami
                            Silahkan hubungi 0813 - 9999 - 1459</h3>
                        <p>
                            Kami akan sesegera mungkin merespon kebutuhanmu dan atur janji waktu untuk berkonsultasi.
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

    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="choose-left">
                        <h3>Tentang Mari Bercerita</h3>
                        <p>
                            Saatnya kamu memiliki akses pada psikolog profesional yang sesuai dengan topik permasalahan yang
                            sedang kamu alami.
                            Bagikan Ceritamu memberikan kebebasan kamu bercerita apapun masalahnya dan bertemu ahlinya untuk
                            mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap
                            informasi data yang kami terima akan kami jaga kerahasiaannya.
                        </p>
                        <div class="row">
                            <div class="col-lg-5">
                                <ul class="list">
                                    <li>
                                        <h4>Visi</h4>
                                    </li>
                                    Menumbuhkan, merawat dan menjaga rasa kepercayaan diri pada setiap individu bahwa
                                    dirinya adalah anugerah terbaik dari Tuhan
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <ul class="list">
                                    <li>
                                        <h4>Misi</h4>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Memberikan akses layanan psikolog profesional yang
                                                mudah dan terjangkau bagi semua kalangan.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Menjadi teman bercerita masalah kesehatan mental yang memberikan keamanan dan kenyamanan.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Menjadi jembatan terjalinnya koneksivitas yang baik antara individu dengan psikolog.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="choose-right">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="blog section" id="blog">
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
    </section> --}}

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Paket Harga</h2>
                        <img src="{{ asset('assets/vendor/img/section-img.png') }}" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <i class="fa-solid fa-chain-broken"></i>
                            </div>
                            <h4 class="title">Konseling Offline/Tatap Muka</h4>
                            <div class="price">
                                <p class="amount">Rp 349.000<span>/ Sesi</span></p>
                            </div>
                        </div>
                        <ul class="table-list">
                            <li>
                                <i class="fa fa-check"></i>Berlokasi di wilayah Jakarta
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Bertemu langsung tatap muka dengan psikolog
                            </li>
                            <li class="cross">
                                <i class="fa fa-check"></i>Waktu berkonsultasi 45-60 menit
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <h4 class="title">Konseling Online/Daring</h4>
                            <div class="price">
                                <p class="amount">Rp 239.000<span>/ Sesi</span></p>
                            </div>
                        </div>

                        <ul class="table-list">
                            <li>
                                <i class="fa fa-check"></i>Dilakukan via google meet
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Tempat dan waktu fleksibel
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Melakukan konsultasi di tempat ternyaman kamu
                            </li>
                            <li class="cross">
                                <i class="fa fa-check"></i>Bisa on cam atau off cam sesuai keinginan
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
                        <h2>Testimoni</h2>
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
                                "Admin benar-benar responsif, saya langsung dapat terjadwalkan konsultasi dengan cepat"
                            </p>
                            <h4 class="name">Mahasiswa</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi2.png') }}" alt="#" />
                            <p>
                                " Sangat nyaman konseling di bagikanceritamu.com, sebelumnya sempat bingung bagaimana bisa meluapkan cerita masalah pribadi pada siapa, setelah menikah saya mengalami depresi hebat karena terjadi miskomunikasi dengan suami. "
                            </p>
                            <h4 class="name">Mba A*i, pasangan muda</h4>
                        </div>

                        <div class="single-testimonial">
                            <img src="{{ asset('assets/vendor/img/testi3.png') }}" alt="#" />
                            <p>
                                "Terima kasih sudah sabar menghadapi saya yang berubah jadwal dadakan dan tetap bisa terlayani untuk berkonsultasi dengan ahlinya. Karena sebagai wanit karir sebagai sekretaris aa banyak tekanan yang membuat sya stre dan saya harus mampu mengikuti mood Pak Bos.""
                                
                            </p>
                            <h4 class="name">Mba Key*a, sekretaris perusahaan X</h4>
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
@endsection
