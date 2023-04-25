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
                        <img src="{{ asset('assets/vendor/img/foto2.jpg') }}" alt="#" />
                        <div class="doctor-details-contact">
                            <div class="doctor-details-biography">
                                <h3 style="color:#20bbc7">Biography</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, sit. Blanditiis
                                    quisquam
                                    tempora dolore repudiandae, similique excepturi laudantium ipsa veniam aut nemo maxime
                                    alias
                                    accusamus saepe quo perferendis voluptatibus repellendus?
                                </p>
                            </div>

                            <div class="doctor-details-biography">
                                <h3 style="color:#20bbc7">Pengalaman</h3>
                                <p>
                                    Lebih dari 5 tahun menekuni bidang psikolog profesi dengan berbagai kasus yang pernah
                                    ditangani, seperti ketergantungan games, ketergantungan obat, kecemasan berlebih karena
                                    selalu gagal dalam berbagai hal
                                </p>
                            </div>

                            <div class="doctor-details-biography">
                                <h3 style="color:#20bbc7">Motto</h3>
                                <p>
                                    Kenali diri dengan baik, bermanfaat kemudian
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="doctor-details-item doctor-details-right">
                        <div class="doctor-name">
                            <h3 class="name">Gouw Kelvin, M.Psi</h3>
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7;">Topik Masalah</h3>
                            <p class="degree" style="margin-top: -20px">
                                <span class="badge badge-secondary">Adiksi atau ketergantungan</span>
                                <span class="badge badge-secondary">Karir</span>
                                <span class="badge badge-secondary">Depresi</span>
                                <span class="badge badge-secondary">Topik Masalah</span>
                            </p>
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Nomor Izin Praktek</h3>
                            <p>
                                1111212
                            </p>
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Pendidikan</h3>
                            <p>
                            <ul>
                                <li>
                                    S2 Magister Psikologi Profesi Klinis Universitas Indonesia

                                </li>
                                <li>
                                    S1 Sarjana Psikologi Universitas Indonesia

                                </li>
                            </ul>
                            </p>
                            <br />
                        </div>
                        <div class="doctor-details-biography">
                            <h3 style="color:#20bbc7">Karakter Personal</h3>
                            <p>
                                Humoris, senang melakukan kegiatan-kegiatan sosial yang bermanfaat bagi lingkungan
                                sekitar
                            </p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-lg btn-block">Konsultasi Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
