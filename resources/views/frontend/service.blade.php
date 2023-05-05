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
                    Ceritakan Masalahmu Tanpa Batas, Psikolog Profesional Kami akan menjadi Temanmu Bercerita dengan
                    Memberikan Pelayanan Konseling Sepenuh Hati.
                </h1>

                <div class="news-text">
                    <p>
                        Para Psikolog yang tergabung di bagikanceritamu adalah mereka yang memiliki pengalaman dan wawasan
                        sesuai topik permasalahan. Ketika kamu datang pada kami dengan masalah yang sedang dialami, psikolog
                        kami akan melakukan observasi yang kemudian melakukan pendalaman untuk memahami masalahmu. Sikap
                        yang terbuka, ramah, pendengar dan tutur kata yang baik menjadi prioritas dalam memberikan layanan
                        konseling.
                    </p>
                    <div class="image-gallery">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-image">
                                    <img src="{{ asset('assets/vendor/img/album30.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <span class="ver-line"></span>
                                <h2 class="service-sub-title-l">Konseling Offline</h2>
                                <p align="justify">
                                    Dimana saja kamu bisa memulai melakukan konseling dengan psikolog. Jika kamu merasakan
                                    sebuah ketidaknyamanan mental yang sampai cukup mengganggu aktivitasmu, namun kamu tidak
                                    punya banyak waktu untuk berkonsultasi secara tatap muka, kami memberikan layanan
                                    konsultasi daring sesuai waktu yang telah disepakati bersama.
                                </p>
                                <p align="justify">
                                    Kami memberikan sebuah gambaran jika kamu mengalami perasaan seperti sedih berlebihan,
                                    stres, trauma, dan perilaku menyimpang bermunculan, jangan ditunda untuk berkonsultasi
                                    karena hal itu bisa mengurangi produktivitasmu, segeralah melakukan konseling dengan
                                    ahlinya, yang dapat memberikanmu sebuah pencerahan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="image-gallery mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <span class="ver-line-right"></span>
                                <h2 class="service-sub-title-r text-right">Konseling Online</h2>
                                <p align="justify text-right">
                                    Konseling tatap muka dengan para psikolog profesional kami, dapat menciptakan komunikasi
                                    yang lebih private dan bercerita dari hati ke hati. Proses konseling dilakukan di tempat
                                    yang telah kami sediakan dengan waktu yang sudah disepakati bersama. Kami akan menyambut
                                    kedatanganmu dengan senang hati.
                                </p>
                                <ul class="list">
                                    <li class="mb-2">
                                        <h4>Alur Konseling Pasangan</h4>
                                    </li>
                                    <li class="mb-2 mt-4">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Booking sesi individu.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Booking sesi individu untuk pasangan.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                            <div class="col-11">
                                                Konseling sesi bersama pasangan.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-image">
                                    <img src="{{ asset('assets/vendor/img/album29.jpg') }}" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
