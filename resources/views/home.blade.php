@extends('base')

@section('content')
<center>
    <h1 class="text-4xl font-bold text-blue-900">CV DIKA LANGGENG<br>TRIJAYA</h1>
    <p class="text-xl text-slate-500">Gudangnya Mobil Berkualitas</p>
    <br>
    <a href="/products/#" class="bg-blue-600 px-2 py-1 text-lg">Show Product</a>
    <br>
    <br>
    <h3 class="text-2xl mb-1">About</h3>
    <div class="w-[50%] p-1 bg-slate-300">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero harum officiis dolores libero, alias commodi quae est culpa aliquam hic!</p>
    </div>
    <br>
    <h3 class="text-2xl mb-1">Galery</h3>
    <center>
        <div class="grid grid-cols-5 w-[90%] gap-2">
            @foreach ($galerys as $galery)
            <div class="w-full bg-[url('../galery/{{ $galery->file }}')] bg-cover">
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
    </center>
</center>
@endsection
