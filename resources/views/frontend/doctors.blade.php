@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Meet Our Qualified Psychologys</h2>
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
                            <img src="{{ asset('assets/vendor/img/team1.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">Collis Molate</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">Domani Plavon</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team3.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Dental Surgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">John Mard</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team4.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">Amanal Frond</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team1.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">Collis Molate</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset('assets/vendor/img/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="{{ route('doctor_detail') }}">Domani Plavon</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
