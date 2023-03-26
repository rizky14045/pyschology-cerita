@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Grid</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog grid section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog1.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">22 Aug, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">We have annnocuced our new product.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog2.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">15 Jul, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">Top five way for solving teeth problems.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog3.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">05 Jan, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">We provide highly business soliutions.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog3.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">05 Jan, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">We provide highly business soliutions.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog1.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">22 Aug, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">We have annnocuced our new product.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('assets/vendor/img/blog2.jpg') }}" alt="#" />
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">15 Jul, 2020</div>
                                        <h2>
                                            <a href="{{ route('blog_detail') }}">Top five way for solving teeth problems.</a>
                                        </h2>
                                        <p class="text">
                                            Lorem ipsum dolor a sit ameti, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt sed do incididunt
                                            sed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <div class="single-widget search">
                            <div class="form">
                                <input type="email" placeholder="Search Here..." />
                                <a class="button" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-sidebar1.jpg') }}" alt="#" />
                                </div>
                                <div class="content">
                                    <h5><a href="#">We have annnocuced our new product.</a></h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                                            2020
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-side') }}bar2.jpg" alt="#" />
                                </div>
                                <div class="content">
                                    <h5>
                                        <a href="#">Top five way for solving teeth problems.</a>
                                    </h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>Mar 05,
                                            2019
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>59
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="image">
                                    <img src="{{ asset('assets/vendor/img/blog-side') }}bar3.jpg" alt="#" />
                                </div>
                                <div class="content">
                                    <h5>
                                        <a href="#">We provide highly business soliutions.</a>
                                    </h5>
                                    <ul class="comment">
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>June
                                            09, 2019
                                        </li>
                                        <li>
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>44
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
