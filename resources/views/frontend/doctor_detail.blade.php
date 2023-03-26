@extends('frontend.layouts.master')

@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Doctor Details</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Doctor Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="doctor-details-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="doctor-details-item doctor-details-left">
                        <img src="{{ asset('assets/vendor/img/doctor-detail.jpg') }}" alt="#" />
                        <div class="doctor-details-contact">
                            <h3>Contact info</h3>
                            <ul class="basic-info">
                                <li>
                                    <i class="fa-solid fa-phone"></i> Call : +07 554 332 322
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="83ebe6efefecc3eee6e7f0e6f5ade0ecee">[email&#160;protected]</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-map"></i> 4th Floor, 408 No
                                    Chamber
                                </li>
                            </ul>

                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-vimeo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                </li>
                            </ul>

                            <div class="doctor-details-work">
                                <h3>Working hours</h3>
                                <ul class="time-sidual">
                                    <li class="day">
                                        Monday - Fridayp <span>8.00-20.00</span>
                                    </li>
                                    <li class="day">Saturday <span>9.00-18.30</span></li>
                                    <li class="day">
                                        Monday - Thusday <span>9.00-15.00</span>
                                    </li>
                                    <li class="day">
                                        Monday - Fridayp <span>8.00-20.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doctor-details-item">
                        <div class="doctor-details-right">
                            <div class="doctor-name">
                                <h3 class="name">Dr. Sarah Taylor</h3>
                                <p class="deg">Neurosurgeon.</p>
                                <p class="degree">MBBS in Neurology, PHD in Neurosurgeon.</p>
                            </div>
                            <div class="doctor-details-biography">
                                <h3>Biography</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo viverra maecenas accumsan lacus vel facilisis.Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt.
                                </p>
                                <br />
                                <p>
                                    Risus commodo viverra maecenas accumsan lacus vel
                                    facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                            <div class="doctor-details-biography">
                                <h3>Education</h3>
                                <ul>
                                    <li>
                                        PHD degree in Neorology at University of Mediserv (2006)
                                    </li>
                                    <li>
                                        Master of Neoro Surgery at University of Mediserv (2002)
                                    </li>
                                    <li>
                                        MBBS degree in Neurosciences at University of Mediserv
                                        (2002)
                                    </li>
                                    <li>
                                        Higher Secondary Certificate at Mediserv collage (1991)
                                    </li>
                                </ul>
                            </div>
                            <div class="doctor-details-biography">
                                <h3>Biography</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo viverra
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
