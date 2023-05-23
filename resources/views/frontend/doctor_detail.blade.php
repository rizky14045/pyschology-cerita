@extends('frontend.layouts.master')
@php
    $setting = App\Models\Setting::get();
@endphp
@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil Psikolog</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('')}}">Beranda</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Profil Psikolog</li>
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
                        <img src="{{ asset('uploads/psychology_image/' . $doctor->psychology_image) }}" alt="#" />
                        <div class="doctor-details-contact">
                            <div class="doctor-details-biography">
                                <h3 style="color:#20bbc7">Biography</h3>
                                <p>
                                    {!! $doctor->biography !!}
                                </p>
                            </div>

                            <div class="doctor-details-biography mt-5">
                                <h3 style="color:#20bbc7">Pengalaman</h3>
                                <p>
                                    {!! $doctor->experience !!}
                                </p>
                            </div>

                            <div class="doctor-details-biography mt-5">
                                <h3 style="color:#20bbc7">Motto</h3>
                                <p>
                                    {!! $doctor->motto !!}
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="doctor-details-item doctor-details-right">
                        <div class="">
                            <h3 class="name">{{ $doctor->name }}</h3>
                        </div>
                        @php
                            $topics = json_decode($doctor->topics);
                            $topic= implode(' , ', $topics);    
                                
                        @endphp
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7;">Topik Masalah</h3>
                            <p class="degree" style="margin-top: -20px">
                                <span>
                                    {{$topic}}
                                </span>
                            </p>
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Nomor Izin Praktek</h3>
                            <p>
                                {!! $doctor->number_license !!}
                            </p>
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Pendidikan</h3>
                            {!! $doctor->education !!}
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Jadwal Psikolog</h3>
                            <p>
                                {!! $doctor->certificate !!}
                            </p>
                        </div>
                    </div>
                    

                    <div class="mt-5">
                        <a
                            href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}?text=Saya ingin berkonsultasi dengan Psikology {{ urlencode($doctor->name) }}"class="btn btn-lg btn-block text-white">Konsultasi
                            Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="doctor-details-biography">
        <section class="section testimonials overlay" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Testimoni</h2>
                            <img src="{{ asset('assets/vendor/img/section-img2.png') }}" alt="#" />
                        </div>
                    </div>
                </div>
                @if ($testimonies)
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="owl-carousel testimonial-slider">
                            @foreach ($testimonies as $testimony)
                            <div class="single-testimonial">
                                <img src="{{asset('uploads/testimony_image/'.$testimony->client_image ?? '')}}" alt="#" />
                                <p>
                                    "{{$testimony->description}}"
                                </p>
                                <h4 class="name">{{$testimony->client_name}}</h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </section>
        <div class="p-5"></div>
    </div>
    </div>
@endsection
