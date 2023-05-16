@extends('frontend.layouts.master') @section('content')
@php
    $setting = App\Models\Setting::get();
@endphp
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('')}}">Beranda</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="contact-us-form">
                            <div class="contact-info">
                                <h2>Kontak Kami</h2>
                                <p>
                                    Jika anda memiliki beberapa pertanyaan bisa kontak kami.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <div class="contact-info">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <div class="content">
                                        <h3><a href="tel:+{{ $setting->where('key', 'phone')->first()->value }}">{{ $setting->where('key', 'phone')->first()->value }}</a></h3>
                                        <p>
                                            <a href="mailto:{{ $setting->where('key', 'email')->first()->value }}">{{ $setting->where('key', 'email')->first()->value }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
