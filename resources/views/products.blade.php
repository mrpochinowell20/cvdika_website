@extends('layouts.app')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@section('content')
    <div class="row mb-3">
        <div class="col-12 text-center mb-2">
            <h1 class="text-4xl font-bold text-blue-900">MOBILINDO<br>CV DIKA LANGGENG TRIJAYA</h1>
            <p class="text-xl text-slate-500">Gudangnya Mobil Bekas Berkualitas</p>
        </div>
        <div class="col-12 text-center mb-3">
            <h3 class="text-4xl font-bold text-white-900">View Products Example 360 Degree</h3>
        </div><br><br>
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <div class="card"><br>
                        <div class="col-12 text-center mb-3"><b>MITSUBISI PAJERO SPORT</b></h3><br>Klik Untuk Melihat Detail
                            <div class="card-body">
                                <div class="ratio ratio-16x9">
                                    <video id="video-player" data-modal-target="360pajero" data-modal-toggle="360pajero"
                                        class="button" autoplay muted>
                                        <source src="{{ asset('360/h_pajero.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card"><br>
                        <div class="col-12 text-center mb-3"><b>HONDA JAZZ RS</b></h3><br>Klik Untuk Melihat Detail
                            <div class="card-body">
                                <video id="video-player-2" data-modal-target="360jazz" data-modal-toggle="360jazz"
                                    class="button" autoplay muted>
                                    <source src="{{ asset('360/h_jazz.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card"><br>
                        <div class="col-12 text-center mb-3"><b>TOYOTA AVANZA BARONG</b></h3><br>Klik Untuk Melihat Detail
                            <div class="card-body">
                                <video id="video-player-3" data-modal-target="360avanza" data-modal-toggle="360avanza"
                                    class="button" autoplay muted>
                                    <source src="{{ asset('360/h_avanza.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h3 class="text-4xl font-bold text-white-900">Pencarian</h3>
                    <form action="{{ route('product_search') }}" method="GET">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="search"
                                placeholder="Masukkan merek atau nama kendaraan">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-2"><label for="end_year">Tahun</label>
                                    <select name="start_year" class="form-control" required>
                                        <option value="">Tahun Awal</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select name="end_year" class="form-control" required>
                                        <option value="">Tahun Akhir</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <select name="transmisi" class="form-control" required>
                                <option value="">Transmisi</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Triptonic">Triptonic</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <select name="bahan_bakar" class="form-control" required>
                                <option value="">Bahan Bakar</option>
                                <option value="Pertalite">Pertalite</option>
                                <option value="Pertamax">Pertamax</option>
                                <option value="Permina Dex">Permina Dex</option>
                                <option value="Dexlite">Dexlite</option>
                                <option value="Solar">Solar</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-2">
                                    <label for="end_year">Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" name="min_price" id="min_price"
                                            placeholder="Dari Harga" required>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" name="min_price" id="min_price"
                                            placeholder="Sampai Harga" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <select name="conditions" class="form-control" required>
                                <option value="">Kondisi</option>
                                <option value="Baru">Baru</option>
                                <option value="Bekas">Bekas</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <select name="city" class="form-control mb-2" required>
                                <option value="">Kota</option>
                                @foreach ($citys as $city)
                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-outline-primary btn-block">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div><br>


    <div class="col-12 text-center mb-3">
        <h3 class="text-4xl font-bold text-white-900">PRODUK TERSEDIA</h3>
    </div>
    <div class="row text-center">
        @foreach ($citys as $city)
            <div class="col-md-12"><br>
                <div class="text-4xl font-bold text-white-900">
                    <h3>Wilayah {{ $city->city }}</h3>
                </div>
            </div><br><br><br>
            @forelse ($products as $product)
                @if ($product->locations == $city->id)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#data_view_{{ $product->id }}">
                                    <img src="/image/{{ $product->image }}" class="img-fluid">
                                    <h3><b><br>{{ $product->name }} {{ $product->type }}</h3></b>klik untuk detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <b class="text-red-500">Tidak ada mobil tersedia di kota ini</b>
            @endforelse
        @endforeach
    </div>

    {{-- Modal --}}
    @foreach ($products as $product)
        <div class="modal fade" id="data_view_{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">
                            <{{ $product->name }}< /h1>
                                <h1 class="text-4xl font-bold text-white-900"><b>Detail Produk</b></h1>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="/image/{{ $product->image }}" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <h3><b>Nama Produk</b><br>{{ $product->name }} {{ $product->type }}</h3>
                                        <h4><b>Tahun</b><br>{{ $product->year }}</h4>
                                        <h4><b>Warna</b><br>{{ $product->colour }}</h4>
                                        <h4><b>Transmisi</b><br>{{ $product->transmisi }}</h4>
                                        <h4><b>Bahan Bakar</b><br>{{ $product->bahan_bakar }}</h4>
                                        <h5><b>Harga</b><br>Rp. {{ $product->range_ori }}</h5>
                                        <p>
                                            <b>Deskripsi Produk</b><br>{{ $product->description }}
                                        </p>
                                    </div>
                                    {{-- <footer id="footer" class="footer-area pt-60"> --}}
                                    <div class="container">
                                        <div class="whatsapp-area wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0.5s">
                                            <div class="kolom-konten text-center">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="kolom-konten text-center"><br>
                                                            <script>
                                                                function openWhatsApp() {
                                                                    window.open("https://api.whatsapp.com/send?phone=+6281359294722", "_blank");
                                                                }
                                                            </script>
                                                            </head>

                                                            <body>
                                                                <h1>Klik tombol di bawah ini untuk informasi lebih lanjut
                                                                </h1><br>
                                                                <button onclick="openWhatsApp()"
                                                                    class="btn btn-primary">Buka WhatsApp</button>
                                                            </body>
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div> <!-- row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary text-dark">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Akhir Modal --}}


    <div id="360pajero" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-4xl font-bold text-white-900">
                        MITSUBISI PAJERO SPORT
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="360pajero">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="../360/pajero.html"></iframe>
                    </div>
                    <div class="kolom-konten text-center"><br>
                        <h3 class="text-4xl font-bold text-white-900">EXAMPLE PRODUCT VIEW 360 DEGREE</h3><br>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center"><b>Infromasi :</b><br>
                                    <p> 1. Arahkan kursor ke arah kanan atau kiri untuk memutar keandaraan 360 derajat</p>
                                    <br>
                                    2. Klik satu kali pada bagian body kendaraan yang diinginkan untuk men-zoom detail
                                    tampilan kendaraan</p><br>
                                    3. Klik satu kali untuk mengembalikan atau men-zoom out tampilan kendaran</p><br>
                                    <div class="kolom-konten text-left"><br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h3><b>Nama Produk</b><br>MITSUBISI PAJERO SPORT DAKAR 2.5 SUNROOF</h3>
                                                <h4><b>Tahun</b><br>2015</h4>
                                                <h5><b>Transmisi</b><br>Triptonic</h5>
                                                <h6><b>Warna</b><br>Putih</h6>
                                                <p>
                                                    <b>Deskripsi Produk</b><br>Produk di atas hanya merupakan contoh produk
                                                    dari kendaraan yang
                                                    kami sediakan, anda dapat melihat detail produk<br>kendaraan tersebut
                                                    dengan teknologi 360
                                                    derajat yang kami sediakan. anda dapat memutar 360 kendaraan<br>dan
                                                    men-zoom salah satu bagian
                                                    dari body kendaraan untuk melihat detailnya. dan jikalau anda berkenan
                                                    dan tertarik pada kendaraan yang
                                                    ada pada display kami, anda dapat menghubungi layanan kami atau
                                                    berkunjung langsung ke
                                                    tempat kami.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    </div>
    <div id="360jazz" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-4xl font-bold text-white-900">
                        HONDA JAZZ RS
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="360jazz">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="../360/jazz.html"></iframe>
                    </div>
                    <div class="kolom-konten text-center"><br>
                        <h3 class="text-4xl font-bold text-white-900">EXAMPLE PRODUCT VIEW 360 DEGREE</h3><br>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center"><b>Infromasi :</b><br>
                                    <p> 1. Arahkan kursor ke arah kanan atau kiri untuk memutar keandaraan 360 derajat</p>
                                    <br>
                                    2. Klik satu kali pada bagian body kendaraan yang diinginkan untuk men-zoom detail
                                    tampilan kendaraan</p><br>
                                    3. Klik satu kali untuk mengembalikan atau men-zoom out tampilan kendaran</p><br>
                                    <div class="kolom-konten text-left"><br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h3><b>Nama Produk</b><br>HONDA JAZZ RS</h3>
                                                <h4><b>Tahun</b><br>2013</h4>
                                                <h5><b>Transmisi</b><br>MANUAL</h5>
                                                <h6><b>Warna</b><br>Putih Mutiara</h6>
                                                <p>
                                                    <b>Deskripsi Produk</b><br>Produk di atas hanya merupakan contoh produk
                                                    dari kendaraan yang
                                                    kami sediakan, anda dapat melihat detail produk<br>kendaraan tersebut
                                                    dengan teknologi 360
                                                    derajat yang kami sediakan. anda dapat memutar 360 kendaraan<br>dan
                                                    men-zoom salah satu bagian
                                                    dari body kendaraan untuk melihat detailnya. dan jikalau anda berkenan
                                                    dan tertarik pada kendaraan yang
                                                    ada pada display kami, anda dapat menghubungi layanan kami atau
                                                    berkunjung langsung ke
                                                    tempat kami.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="360avanza" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-4xl font-bold text-white-900">
                        TOYOTA AVANZA
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="360avanza">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="../360/avanza.html"></iframe>
                    </div>
                    <div class="kolom-konten text-center"><br>
                        <h3 class="text-4xl font-bold text-white-900">EXAMPLE PRODUCT VIEW 360 DEGREE</h3><br>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center"><b>Infromasi :</b><br>
                                    <p> 1. Arahkan kursor ke arah kanan atau kiri untuk memutar keandaraan 360 derajat</p>
                                    <br>
                                    2. Klik satu kali pada bagian body kendaraan yang diinginkan untuk men-zoom detail
                                    tampilan kendaraan</p><br>
                                    3. Klik satu kali untuk mengembalikan atau men-zoom out tampilan kendaran</p><br>
                                    <div class="kolom-konten text-left"><br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h3><b>Nama Produk</b><br>TOYOTA AVANZA BARONG</h3>
                                                <h4><b>Tahun</b><br>2016</h4>
                                                <h5><b>Transmisi</b><br>AUTOMATIC</h5>
                                                <h6><b>Warna</b><br>Putih</h6>
                                                <p>
                                                    <b>Deskripsi Produk</b><br>Produk di atas hanya merupakan contoh produk
                                                    dari kendaraan yang
                                                    kami sediakan, anda dapat melihat detail produk<br>kendaraan tersebut
                                                    dengan teknologi 360
                                                    derajat yang kami sediakan. anda dapat memutar 360 kendaraan<br>dan
                                                    men-zoom salah satu bagian
                                                    dari body kendaraan untuk melihat detailnya. dan jikalau anda berkenan
                                                    dan tertarik pada kendaraan yang
                                                    ada pada display kami, anda dapat menghubungi layanan kami atau
                                                    berkunjung langsung ke
                                                    tempat kami.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var videoPlayer = document.getElementById('video-player');
            var videoPlayer2 = document.getElementById('video-player-2');
            var videoPlayer3 = document.getElementById('video-player-3');

            videoPlayer.addEventListener('loadedmetadata', function() {
                // Autoplay video saat halaman dimuat
                videoPlayer.play().catch(function(error) {
                    // Penanganan kesalahan jika autoplay tidak didukung oleh browser
                    console.log('Autoplay tidak didukung oleh browser.');
                });
            });

            videoPlayer.addEventListener('ended', function() {
                videoPlayer.load();
            });

            videoPlayer2.addEventListener('loadedmetadata', function() {
                videoPlayer2.play();
            });

            videoPlayer2.addEventListener('ended', function() {
                videoPlayer2.load();
            });

            videoPlayer3.addEventListener('loadedmetadata', function() {
                videoPlayer3.play();
            });

            videoPlayer3.addEventListener('ended', function() {
                videoPlayer3.load();
            });
        });
    </script>
@endpush
