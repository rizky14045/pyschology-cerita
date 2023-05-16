@extends('frontend.layouts.master')

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
                            <li class="active">Artikel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="main-sidebar">
                        <div class="single-widget search">
                            <div class="form">
                                <form action="{{ route('blogs') }}" method="GET">
                                    <input type="text" placeholder="Cari judul artikel" name="judul" value="{{$judul}}" />
                                    <button type="submit" class="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section class="blog grid section" style="margin-top:-70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-md-4 col-12">
                            <a href="{{ route('blog_detail',['slug'=>'saat-berduka-tidak-selamanya-hanya-bisa-bersedih']) }}">
                           
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{asset('uploads/banner_image/'.$article->banner_image)}}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">{{$article->created_at->format('d F Y')}}</div>
                                        <h2>
                                            <a href="{{ route('blog_detail',['slug'=>$article->slug]) }}">{{$article->title}}</a>
                                        </h2>
                                        <p class="text" id="artikel" align="justify"> 
                                        {{substr($article->description, 0, 200) . '...'}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                        {{-- <div class="col-12">
                            <div class="pagination">
                                <ul class="pagination-list">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-left"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#"><i class="icofont-rounded-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- {{$articles->links()}} --}}
    </section>
@endsection

