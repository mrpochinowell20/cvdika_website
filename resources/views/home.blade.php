@extends('layouts.app')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')
<center>
    <h1 class="text-4xl font-bold text-blue-900">MOBILINDO<br>CV DIKA LANGGENG TRIJAYA</h1>
    <p class="text-xl text-slate-500">Gudangnya Mobil Berkualitas</p>
    {{-- <a href="/products/#" class="px-2 py-1 text-lg">Produk Selengkapnya</a> --}}
    <br>
    <br>
    <h3 class="text-2xl text-slate-500">Tentang</h3>
    <div class="w-[50%] p-1 bg-slate-300">
        <p>Kami menyediakan berbagai macam produk kendaraan mobil bekas yang dibutuhkan mulai kendaraan perseorangan, keluarga, pekerja, hingga kantor. </p>
        <a href="/about/#" >Info Selengkapnya</a>
    </div>
    <br>
    <h3 class="text-2xl text-slate-500">Galeri</h3>
    <center>
        <div class="card">
            <div class="card-body">
                <div class="grid grid-cols-5 w-[90%] gap-2">
                    @foreach ($galerys as $galery)
                    <div class="w-full bg-[url('../galery/{{ $galery->file }}')] bg-cover zoomable-image">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </center>

    <style>
        .zoomable-image {
            transition: transform 0.3s;
        }

        .zoomable-image:hover {
            transform: scale(1.1);
        }
    </style>

</center>
@endsection

