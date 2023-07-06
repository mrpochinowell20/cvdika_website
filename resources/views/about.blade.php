@extends('layouts.app')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
    <center>
        <h1 class="text-4xl font-bold text-blue-900">MOBILINDO<br>CV DIKA LANGGENG TRIJAYA</h1>
        <p class="text-xl text-slate-500">Gudangnya Mobil Berkualitas</p>
        <br><br>
        <p class="text-xl text-slate-500"><strong>TENTANG PERUSAHAAN</strong></p>
        <section id="about" class="about-area pt-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="section-title text-center pb-50">
                            <div class="line m-auto"></div>
                            <h3 class="title"></h3>
                        </div> <!-- section title -->
                        <div class="col-lg-12">
                            <div class="kolom-konten text-center">
                                <div class="title-section-konten text-muted text-bold"
                                    style="font-size:15px; margin:10px 0;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="section-title">
                                <div class="line"></div>
                                <p class="text-xl text-slate-500"><strong>CV DIKA LANGGENG TRIJAYA</strong> didirikan pada
                                    November 2013 oleh Ny. Eka Rusmawati dengan lokasi kantor Jl. Raya Solo - Maospati no 07
                                    Maospati, Magetan, Jawa Timur, 63392.</p>
                                <p class="text-xl text-slate-500">dengan nominal modal awal Rp. 1.300.000.000, tunai dan
                                    sebuah kantor diperkirakan dengan nilai Rp. 150.000.000, dengan bentuk PD. Langgeng Jaya
                                    pada awalnya. Dengan jumlah karyawan 3 orang bergerak pada sektor perdagangan jual -
                                    beli mobil bekas</p>
                            </div>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <img src="{{ asset('direk.png') }}" style="width:700px;height:350px;">
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
        <section class="about-area pt-70">
            <!-- <div class="about-shape-2">
                <img src="assets/images/about-shape-2.svg" alt="shape">
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-last">
                        <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="section-title">
                                <div class="line"></div>
                            </div> <!-- section title -->
                            <p class="text-xl text-slate-500">Saat ini<strong> CV Dika Langgeng Trijaya</strong> telah
                                memiliki beberapa cabang bisnis yang dikelola langsung dibawah naungan CV Dika Langgeng
                                Trijaya.</p>
                            <p class="text-xl text-slate-500">Kami menyediakan lowongan kerja bagi masyarakat sekitar untuk
                                membantu memulihkan perekonomian yang ada.</p>
                            <p class="text-xl text-slate-500">Untuk info lebih lanjut
                            <div class="w-[25%] p-1 bg-slate-200">
                                <a href="https://api.whatsapp.com/send?phone=+6285648757911&text=Saya%20melihat%20Website%20IdeaMultima%2C%20dan%20saya%20ingin%20berkonsultasi">Info Selengkapnya</a>
                            </div>
                            {{-- <a href="https://ideamultima.com/" class="main-btn">Hubungi Untuk Bisnis</a> --}}
                        </div> <!-- about content -->
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <img src="{{ asset('cvv.png') }}" style="width:600px;height:400px;">
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>


        <section class="about-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="section-title">
                                <div class="line"></div>
                                <p class="text"><strong>Visi Perusahaan</strong> adalah menjadi perusahaan berstandart
                                    yang memiliki keunggulan kompetitif di pasar global.</p>
                                <p class="text"><strong>Misi Perusahaan</strong> adalah sebagai berikut:</p>
                                <p class="text">Beroprasi secara efisien (low cost operation)</p>
                                <p class="text">Meningkatkan kesejahteraan karyawan dan</p>
                                <p class="text">Berpartisipasi di dalam upaya meminimalkan jumlah pengangguran di
                                    lingkungan perushaan</p>
                                <p class="text"><strong>Tujuan Perusahaan</strong> adalah untuk meningkatkan dan
                                    memaksiumkan kemakmuran pemilik perusahaan serta bisa memberdayakan masyarakat setempat
                                    untuk mengurangi jumlah pengangguran. Serta untuk jangka panjang perusahaan akan
                                    mengembangkan perusahaan dalam teknik sipil, konstruksi pembangunan - pembangunan daerah
                                </p><br><br><br>
                                <a href="https://api.whatsapp.com/send?phone=+628113662501&text=Saya%20melihat%20Website%20IdeaMultima%2C%20dan%20saya%20ingin%20berkonsultasi"
                                    class="main-btn"></a>
                            </div> <!-- section title -->
                        </div> <!-- about content -->
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <img src="{{ asset('cv.png') }}" style="width:700px;height:500px;">
                        </div> <!-- about image -->
                    </div>
                </div>
        </section>

        <footer id="footer" class="footer-area pt-60">
            <div class="container">
                <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="kolom-konten text-center">
                        <div class="card">
                        <div class="col-lg-12">
                            <div class="kolom-konten text-center"><br>
                                <p class="text-xl text-slate-500"><strong>HUBUNGI KAMI</strong></p>
                                <div class="title-section-konten text-muted text-bold"
                                    style="font-size:30px; margin:10px 0;">
                                    Temukan semua informasi yang anda butuhkan hanya di
                                </div>
                                <div class="title-section-konten text-muted text-bold"
                                    style="font-size:30px; margin:10px 0;">
                                    CV DIKA LANGGENG TRIJAYA
                                </div>
                                <div style="margin-top:35px;">
                                    <a href="https://api.whatsapp.com/send/?phone=6285648757911&text&type=phone_number&app_absent=0"
                                        class="btn btn-primary" style="padding:5px 25px; border-radius:10px;">Whatsapp</a>
                                </div><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>




                <section id="contact" class="contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="card">
                                <div class="kolom-konten text-center"><br>
                            <div class="col-lg-12">
                                <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                                    data-wow-delay="1.4s">
                                    <p class="text-xl text-slate-500"><strong>LOKASI</strong></p>
                                </div><br><br>
                            </div>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <iframe width="100%"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63276.20052685974!2d111.40162649086798!3d-7.600802258446989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79959a550d4109%3A0xba7de4ef0d8434f1!2sCV%20DIKA%20LANGGENG%20TRIJAYA!5e0!3m2!1sid!2sid!4v1687703736327!5m2!1sid!2sid"
                                        width="1100" height="270" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div><br><br><br>
                </section><br><br><br><br>
    </center>
@endsection
