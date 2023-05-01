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
                            <li><a href="index.html">Home</a></li>
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
                        <img src="{{asset('uploads/psychology_image/'.$doctor->psychology_image)}}" alt="#" />
                        <div class="doctor-details-contact">
                            <div class="doctor-details-biography">
                                <h3 style="color:#20bbc7">Biography</h3>
                                <p>
                                    {!!$doctor->biography!!}
                                </p>
                            </div>

                            <div class="doctor-details-biography mt-5">
                                <h3 style="color:#20bbc7">Pengalaman</h3>
                                <p>
                                    {!!$doctor->experience!!}
                                </p>
                            </div>

                            <div class="doctor-details-biography mt-5">
                                <h3 style="color:#20bbc7">Motto</h3>
                                <p>
                                    {!!$doctor->motto!!}
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="doctor-details-item doctor-details-right">
                        <div class="doctor-name">
                            <h3 class="name">{{$doctor->name}}</h3>
                        </div>
                        @php
                            $topics = json_decode($doctor->topics);
                        @endphp
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7;">Topik Masalah</h3>
                            <p class="degree" style="margin-top: -20px">
                                @foreach ($topics as $item)    
                                    @if ($item)
                                        <span class="badge bg-secondary text-white">{{$item}}</span>
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:ss">Nomor Izin Praktek</h3>
                            <p>
                                {!!$doctor->number_license!!}
                            </p>
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Pendidikan</h3>
                            {!!$doctor->education!!}
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Sertifikat</h3>
                            <p>
                                {!!$doctor->certificate!!}
                            </p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="https://wa.me/{{ $setting->where('key', 'whatsapp')->first()->value }}?text=Saya ingin berkonsultasi dengan Psikology {{urlencode($doctor->name)}}"class="btn btn-lg btn-block text-white">Konsultasi Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
