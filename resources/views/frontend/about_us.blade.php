@extends('frontend.layouts.master')


@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-us-left">
                            <div id="myMap">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.354174485484!2d106.81974699624081!3d-6.173969132033035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1680430945713!5m2!1sen!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Contact With Us</h2>
                            <div class="contact-info">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <div class="content">
                                        <h3>+6212345678910</h3>
                                        <p>
                                            <a class="__cf_email__"
                                                data-cfemail="f79e999198b794989a8796998ed994989a">support@maribercerita.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-map-marker"></i>
                                    <div class="content">
                                        <h3>2 Fir e Brigade Road</h3>
                                        <p>Chittagonj, Lakshmipur</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
