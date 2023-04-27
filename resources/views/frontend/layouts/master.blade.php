<!DOCTYPE html>
<html class="no-js" lang="zxx">
@php
    $setting = App\Models\Setting::get();
@endphp

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="title" content="{{ $setting->where('key', 'name')->first()->value }} - {{$title}}">
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $setting->where('key', 'name')->first()->value }} - {{$title}}">
    <meta itemprop="description" content="{{$description}}">
    <meta itemprop="image" content="{{ asset('uploads/setting/' . $setting->where('key', 'logo')->first()->value) }}">

   
    <title>{{ $setting->where('key', 'name')->first()->value }} - {{$title}}</title>

    <link rel="icon" href="{{ asset('uploads/setting/' . $setting->where('key', 'favicon')->first()->value) }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/font-awesome.min.css') }}" />

    <script src="https://kit.fontawesome.com/f4d8831647.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/icofont.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/slicknav.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/owl-carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/datepicker.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/animate.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/color/color1.css') }}" />

    <link rel="stylesheet" href="#" id="colors" />
</head>

<body>
    {{-- <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div> --}}

    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <ul class="top-link">
                            <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('doctors') }}">Psikolog</a></li>
                            <li><a href="{{ route('contact') }}">Kontak</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('syarat-ketentuan') }}">Syarat dan Ketentuan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>
                                <a href="tel:+{{ $setting->where('key', 'phone')->first()->value }}">
                                    {{ $setting->where('key', 'phone')->first()->value }}
                                    </a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i><a
                                    href="mailto:{{ $setting->where('key', 'email')->first()->value }}"><span
                                        class="__cf_email__">{{ $setting->where('key', 'email')->first()->value }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="logo">
                                <a href="/"><img
                                        src="{{ asset('uploads/setting/' . $setting->where('key', 'logo')->first()->value) }}"
                                        alt="#" /></a>
                            </div>

                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="{{ Route::is('homepage') ? 'active' : '' }}">
                                            <a href="/">Beranda</a>
                                        </li>
                                        <li class="{{ Route::is('services') ? 'active' : '' }}">
                                            <a href="{{ route('services') }}">Layanan</i></a>

                                            {{-- JANGAN DIHAPUS! --}}

                                            {{-- <ul class="dropdown" aria-labelledby="navbarDropdownMenuLink">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Konseling Online</a>
                                                    <ul class="dropdown-menu changing-dropdown" id="">
                                                        <li><a class="dropdown-item submenuNav "
                                                                href="#">Konseling Online Individu</a></li>
                                                        <li><a class="dropdown-item submenuNav "
                                                                href="#">Konseling Online Pasangan</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Konseling Offline</a>
                                                    <ul class="dropdown-menu changing-dropdown">
                                                        <li><a class="dropdown-item submenuNav "
                                                                href="#">Konseling Offline Individu</a></li>
                                                        <li><a class="dropdown-item submenuNav "
                                                                href="#">Konseling Offline Pasangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="{{ Route::is('topics') ? 'active' : '' }}">
                                            <a href="{{ route('topics') }}">Topik Konseling</a>
                                        </li>
                                        <li class="{{ Route::is('doctors') ? 'active' : '' }}">
                                            <a href="{{ route('doctors') }}">Psikologi Kami</i></a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('blogs') }}">Artikel</i></a>
                                        </li> --}}
                                        <li class="{{ Route::is('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p align="justify">
                                Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Beranda</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Topik Konseling</a>
                                        </li>
                                        {{-- <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Artikel</a>
                                        </li> --}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="{{ route('services') }}"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Layanan</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Psikologi Kami</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Social Media</h2>
                            <ul class="social">
                                <li>
                                    <a href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}"><i
                                            class="fa-brands fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->where('key', 'facebook')->first()->value }}"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->where('key', 'twitter')->first()->value }}"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->where('key', 'instagram')->first()->value }}"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p class="text-white"> © {{date('Y')}} bagikanceritamu.com <span class="d-none d-sm-inline-block"> by Ditama Digital.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="icon-bar">
        <a href="{{ $setting->where('key', 'instagram')->first()->value }}" class="instagram">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="{{ $setting->where('key', 'facebook')->first()->value }}" class="facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="{{ $setting->where('key', 'twitter')->first()->value }}" class="twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </div>

    <a href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}" class="float" target="_blank">
        <img src="{{ asset('assets/vendor/img/whatsapp-logo.svg') }}" alt="">
    </a>

    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('assets/vendor/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/jquery-migrate-3.0.0.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/easing.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/colors.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/bootstrap-datepicker.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/jquery.nav.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/slicknav.min.js') }}"></script>

    {{-- <script src="{{ asset('assets/vendor/js/jquery.scrollUp.min.js') }}"></script> --}}

    <script src="{{ asset('assets/vendor/js/niceselect.js') }}"></script>

    {{-- <script src="{{ asset('assets/vendor/js/tilt.jquery.min.js') }}"></script> --}}

    <script src="{{ asset('assets/vendor/js/owl-carousel.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/steller.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <script src="{{ asset('assets/vendor/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/main.js') }}"></script>


    <script>
        $(document).ready(function() {
            var window_size = $(window).width();

            if (window_size < 767) {
                $('.changing-dropdown').addClass('dropdown').removeClass('dropdown-menu');
            } else {
                $('.changing-dropdown').remove('dropdown').addClass('dropdown-menu');
            }
        });

        $(window).on('resize', function() {
            if ($(window).width() < 767) {
                $('.changing-dropdown').addClass('dropdown').removeClass('dropdown-menu');
            } else {
                $('.changing-dropdown').remove('dropdown').addClass('dropdown-menu');
            }
        })
    </script>
</body>

</html>
