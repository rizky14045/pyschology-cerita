<!DOCTYPE html>
<html class="no-js" lang="zxx">
@php
    $setting = App\Models\Setting::get();
@endphp

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>{{ $setting->where('key', 'name')->first()->value }}</title>

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
    <div class="preloader">
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
    </div>

    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <ul class="top-link">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Psikolog</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+6212345678910</li>
                            <li>
                                <i class="fa fa-envelope"></i><a
                                    href="/cdn-cgi/l/email-protection#d9aaaca9a9b6abad99a0b6acabb4b8b0b5f7bab6b4"><span
                                        class="__cf_email__"
                                        data-cfemail="12616762627d6066526b7d67607f737b7e3c717d7f">support@maribercerita.com</span></a>
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
                                        <li class="active">
                                            <a href="#">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="#">Layanan <i class="fa-solid fa-chevron-down"></i></a>
                                            <ul class="dropdown" aria-labelledby="navbarDropdownMenuLink">
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
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('topics') }}">Topik Konseling</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('doctors') }}">Psikologi Kami</i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blogs') }}">Artikel</i></a>
                                        </li>
                                        <li><a href="contact.html">About Us</a></li>
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
                            <p>
                                Lorem ipsum dolor sit am consectetur adipisicing elit do
                                eiusmod tempor incididunt ut labore dolore magna.
                            </p>

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
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Services</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
                                                Cases</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Other Links</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Finance</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit do
                                eiusmod tempor incididunt.
                            </p>
                            <ul class="time-sidual">
                                <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
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
                            <p>
                                Â© Copyright 2018 | All Rights Reserved by
                                <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="icon-bar">
        <a href="#" class="instagram">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="#" class="facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </div>

    <a href="#" class="float">
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
