@extends('frontend.layouts.master')
@section('content')
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
            <p class="mb-3" align="justify">
                <b>Syarat dan Ketentuan Umum:</b> Dengan mengakses atau menggunakan layanan <b>Bagikanceritamu.com</b>, Anda dianggap setuju untuk terikat dengan Syarat dan Ketentuan ini. Syarat dan Ketentuan akan memengaruhi hak dan kewajiban hukum Anda. Jika tidak setuju untuk terikat dengan Syarat & Ketentuan ini, Anda dapat menghapus akun dan/atau berhenti menggunakan seluruh layanan yang ada di <b>Bagikanceritamu.com</b>
            </p>
            <ul>
                <li class="mb-3">
                    <p align="justify">
                        •	Berikut adalah Syarat dan Ketentuan (“Persetujuan”) untuk Anda yang mengakses dan mempergunakan layanan dari Teman Bicara. Layanan ini dapat diakses dan disediakan melalui bermacam-macam situs, perangkat, platform, dan teknologi lainnya yang dimiliki atau/dan dioperasikan oleh kami (PT. Teman Berbagi Cerita) atau dari pihak ketiga, termasuk, dan tidak terbatas kepada, website <b>Bagikanceritamu.com</b>
                    </p>
                </li>
                <li class="mb-3">
                    <p align="justify">
                        •	Dengan mengakses atau menggunakan layanan ini, atau dengan menekan tombol atau kotak yang tersedia, maka hal tersebut mengindikasikan bahwa Anda sudah membaca dan menyetujui syarat dan ketentuan berikut. Mohon untuk membaca Persetujuan ini dengan saksama sebelum mulai menggunakan layanan ini. Apabila Anda tidak setuju untuk terikat dengan syarat- syarat dari Persetujuan ini, Anda dianjurkan untuk tidak melakukan pendaftaran dan menggunakan layanan ini. 
                    </p>
                </li>
                <li class="mb-3">
                    <p align="justify">
                        •	Kami berhak untuk sewaktu-waktu mengubah, menghapus dan/atau menerapkan syarat dan ketentuan baru dalam Ketentuan Penggunaan ini.
                    </p>
                </li>
            </ul>
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
