@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Para Psikologi Kami</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Psychologys</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="team" class="team section single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctor_detail') }}" class="btn">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2><a href="{{ route('doctor_detail') }}">Gouw Kelvin, M.Psi</a></h2>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
@endsection
