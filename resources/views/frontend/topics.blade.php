@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Topics</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Topik Konseling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="topic" class="topic section single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/addiction.png') }}" alt="#" height="50" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Adiksi atau Ketergantungan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/adhd.png') }}" alt="#" height="50" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">ADHD</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/anger.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Anger Management</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/anxiety.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Anxiety / Kecemasan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/kepribadian.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Masalah kepribadian</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/depresi.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Depresi</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/pekerjaan.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Karier dan pekerjaan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/sexual.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Sexualitas</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/parenting.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Parenting</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/rumahtangga.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Masalah rumah tangga</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/relation.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Relationship</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/lainnya.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctor_detail') }}">Lainya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
