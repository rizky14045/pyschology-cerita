@extends('frontend.layouts.master')
@section('styles')
    <style>
        .news-text ol{
            padding-left:30px;
        }
        .news-text ol li{
            color:black;
           
        }
        ul{
            padding-left:30px !important;
        }
        .news-text ul li{
            list-style:disc !important;
            color:black;
        }
    </style>
@endsection

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Artikel</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">{{$article->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <div class="news-head">
                                    <img src="{{asset('uploads/banner_image/'.$article->banner_image)}}" alt="#" />
                                </div>

                                <h1 class="news-title">
                                    {{$article->title}}
                                </h1>

                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#"><img src="{{asset('uploads/profile_image/')}}/{{$article->creator->profile_image ?? 'default.png'}}"
                                                    alt="#" />{{$article->creator->name ??''}}</a></span>
                                        <span class="date"><i class="fa fa-clock-o"></i>{{$article->created_at->format('d F Y')}}</span>
                                    </div>
                                    <div class="meta-right">
                                        {{-- <span class="comments"><a href="#"><i class="fa fa-comments"></i>05
                                                Comments</a></span> --}}
                                        {{-- <span class="views"><i class="fa fa-eye"></i>33K Views</span> --}}
                                    </div>
                                </div>

                                <div class="news-text">
                                    {!!$article->body!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">

                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                            @foreach ($recent as $item)
                            <div class="single-post">
                                <div class="image" style="height:35%;">
                                    <img src="{{asset('uploads/banner_image/'.$item->banner_image)}}" alt="#" style="height:100%;" />
                                </div>
                                <div class="content">
                                    <h5><a href="{{ route('blog_detail',['slug'=>$item->slug]) }}">{{$item->title}}</a></h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>{{$item->created_at->format('d F Y')}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
