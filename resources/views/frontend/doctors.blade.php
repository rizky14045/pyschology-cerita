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

    <section id="team" class="section single-page">
        <div class="container-doctor">
            <div class="row">
                @foreach ($doctors as $doctor)
                    <div class="custom-single-team col-md-4">
                        <div class="st-header">
                            <img src="{{ asset('assets/vendor/img/' . $doctor->psychology_image) }}" alt="#" />
                            <div class="">
                                <h2><a href="{{ route('doctor_detail') }}">{{ $doctor->name }}</a></h2>
                            </div>
                        </div>
                        <div class="ct-content mt-5">
                            {!! $doctor->experience !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
