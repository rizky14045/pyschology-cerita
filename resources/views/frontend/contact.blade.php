@extends('frontend.layouts.master') @section('content')
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

                        <div class="contact-us-form">
                            <div class="contact-info">
                                <h2>Contact With Us</h2>
                                <p>
                                    If you have any questions please fell free to contact with us.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <div class="contact-info">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <div class="content">
                                        <h3>+{{ $contact[17]->value }}</h3>
                                        <p>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="771e1911183714181a0716190e5914181a">{{ $contact[16]->value }}</a>
                                        </p>
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
