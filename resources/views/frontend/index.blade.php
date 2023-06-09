@extends('frontend.layouts.master')
@php
    $setting = App\Models\Setting::get();
@endphp

@section('content')
    <section class="slider">
        {{-- <div class="single-slider" style="background-image: url('assets/vendor/img/slider2.jpg')"> --}}

        {{-- <div class="single-slider" style="background-image: url('assets/images/header3.jpeg')"> --}}
        <div class="single-slider" style="background-image: url('{{asset('uploads/header_image/'.$header->header_image)}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text mr-5">
                            <h2>
                               {!!$header->description!!}
                            </h2>
                            <p class="hero_desc">
                                <b>{{$header->sub_description}}</b>
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
                                    <a href="{{route('services')}}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
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
                                    <h4>Psikolog Profesional</h4>
                                    <p class="py-4">
                                        Para Psikolog Terbaik dan Berpengalaman Di Bidangnya
                                    </p>
                                    <a href="{{route('doctors')}}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
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
                                    <a href="{{route('topics')}}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
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
                        <h3>Konseling Offline
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
                        <h3>Konseling Online</h3>
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
                            <p>Saat kamu sudah terhubung dengan kami, melakukan pembayaran dan konseling sudah terjadwalkan</p>
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
                        <h3>Jika kamu ingin bercerita dengan psikolog kami mengenai kegelisahan mu silahkan hubungi nomor {{ $setting->where('key', 'whatsapp')->first()->value }}</h3>
                        <p>
                            Kami akan sesegera mungkin merespon kebutuhanmu dan atur janji waktu untuk berkonsultasi.
                        </p>
                        <div class="button">
                            <a href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}" target="_blank" class="btn">Contact Now</a>
                            <a href="{{route('services')}}" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
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
                        <h3>Tentang Bagikan Ceritamu</h3>
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

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Paket Harga</h2>
                        <img src="{{ asset('assets/vendor/img/section-img.png') }}" alt="#" />
                        <p>
                            Selalu Ada Jalan Keluar dari Setiap Masalah
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-title pb-1">
                <h3>Online</h3>
            </div>
            <div class="row pb-5" style="margin-top:-50px;">
                @foreach ($online as $item)
                @php
                $list = json_decode($item->list_product);
                @endphp
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <img src="{{asset('uploads/product_image/'.$item->product_image)}}" alt="#" style="height:75px;"/>
                            </div>
                            <h4 class="title">{{$item->title}}</h4>
                            <div class="price">
                                <p class="amount">Rp .{{number_format($item->price)}}<span>/ Sesi</span></p>
                            </div>
                        </div>
                        <ul class="table-list">
                            @foreach ($list as $block)
                                @if ($list)
                                <li>
                                    <i class="fa fa-check"></i>{{$block}}
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}?text={{urlencode($item->title ?? '')}}" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="section-title mt-2">
                <h3>Offline</h3>
            </div>
            <div class="row" style="margin-top:-50px;">
                @foreach ($offline as $item)
                @php
                $list = json_decode($item->list_product);
                @endphp
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <div class="table-head">
                            <div class="icon">
                                <img src="{{asset('uploads/product_image/'.$item->product_image)}}" alt="#" style="height:75px;"/>
                            </div>
                            <h4 class="title">{{$item->title}}</h4>
                            <div class="price">
                                <p class="amount">Rp .{{number_format($item->price)}}<span>/ Sesi</span></p>
                            </div>
                        </div>
                        <ul class="table-list">
                            @foreach ($list as $block)
                                @if ($list)
                                <li>
                                    <i class="fa fa-check"></i>{{$block}}
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}?text={{urlencode($item->title ?? '')}}" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        @foreach ($testimonies as $testimony)
                        <div class="single-testimonial">
                            <img src="{{asset('uploads/testimony_image/'.$testimony->client_image ?? 'default.png')}}" alt="#" />
                            <p>
                                "{{$testimony->description}}"
                            </p>
                            <h4 class="name">{{$testimony->client_name}}</h4>
                        </div>
                        @endforeach
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
                        <h4>Membuka diri, berbicara dari hati ke hati, sambut hari-harimu dengan langkah pasti.</h4>
                        <img src="{{ asset('assets/images/brain1.png') }}" width="50">
                        <p>
                            Nikmati layanan konsultasi psikolog terpercaya dari kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        @foreach ($albums as $album)
                        <img src="{{asset('uploads/album_image/'.$album->album_image)}}" alt="#" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
