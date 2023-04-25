@extends('frontend.layouts.master')


@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Tentang Kami</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Tentang Kami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area section">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <img src="{{ asset('assets/vendor/img/album31.jpg') }}" alt="image">
                </div>
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-content">
                        <span>Tentang Kami</span>
                        <p align="justify">Saatnya kamu memiliki akses pada psikolog profesional yang sesuai dengan topik permasalahan yang sedang kamu alami.
                            Bagikan Ceritamu memberikan kebebasan kamu bercerita apapun masalahnya dan bertemu ahlinya untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi data yang kami terima akan kami jaga kerahasiaannya. Para Psikolog yang tergabung di bagikanceritamu adalah mereka yang memiliki pengalaman dan wawasan sesuai topik permasalahan. Ketika kamu datang pada kami dengan masalah yang sedang dialami, psikolog kami akan melakukan observasi yang kemudian melakukan pendalaman untuk memahami masalahmu. Sikap yang terbuka, ramah, pendengar dan tutur kata yang baik menjadi prioritas dalam memberikan layanan konseling. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-vision-area ptb-100 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <h3>Fokus</h3>
                        <p>Kami memberikan perhatian penuh pada keluhan masalah yang kamu sampaikan. Fokus kami memberikan pelayanan senyaman mungkin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="fa fa-smile"></i>
                        </div>
                        <h3>Ramah</h3>
                        <p>Sikap yang ramah dan tutur kata yang baik menjadi hal utama yang diberikan oleh para psikolog kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="fa fa-key"></i>
                        </div>
                        <h3>Kerahasiaan Terjaga</h3>
                        <p>Kami sangat berkomitmen untuk menjaga kerahasiaan informasi yang kamu berikan</p>
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
            </div>
        </div>
    </section>
@endsection
