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
                @foreach ($topics as $topic)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-topic">
                            <div class="t-head">
                                <img src="{{ url('uploads/topic_image/', $topic->topic_image) }}" alt="#" height="50" />
                                <div class="t-icon">
                                    <a href="{{ route('doctors',['topic'=>$topic->topic_name]) }}" class="btn">Konsultasi</a>
                                </div>
                            </div>
                            <div class="t-bottom">
                                <p><a href="{{ route('doctors') }}">{{$topic->topic_name}}</a></p>
                                <span>{{$topic->description}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-topic">
                        <div class="t-head">
                            <img src="{{ url('uploads/topic_image/other.png') }}" alt="#" />
                            <div class="t-icon">
                                <a href="{{ route('doctors') }}" class="btn">Konsultasi</a>
                            </div>
                        </div>

                        <div class="t-bottom">
                            <p><a href="{{ route('doctors') }}">Lainya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
