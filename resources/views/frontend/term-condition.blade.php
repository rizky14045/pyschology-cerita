@extends('frontend.layouts.master') @section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Syarat dan Ketentuan</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Syarat dan Ketentuan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="faq-area section">

        <div class="container">
            <p class="mb-5">
                Dengan mengakses atau menggunakan layanan bagikanceritamu.com, Anda dianggap setuju untuk terikat dengan Syarat dan
                Ketentuan ini. Syarat dan Ketentuan akan memengaruhi hak dan kewajiban hukum Anda. Jika tidak setuju untuk
                terikat dengan Syarat & Ketentuan ini, Anda dapat menghapus akun dan/atau berhenti menggunakan seluruh
                layanan yang ada di bagikanceritamu.com.
            </p>
            <div class="row faq-wrap">
                <div class="col-lg-12">
                    <div class="faq-item">
                        <ul class="accordion">
                            @foreach ($termConditions as $termCondition)
                                <li class="wow fadeInUp" data-wow-delay=".3s"
                                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <a class="active">{{ $termCondition->title }}</a>
                                    <p style="display: block;">{!! $termCondition->description !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
