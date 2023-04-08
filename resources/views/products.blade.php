@extends('base')

@section('content')
<center>
    <h1 class="text-4xl font-bold text-blue-900">CV DIKA LANGGENG<br>TRIJAYA</h1>
    <p class="text-xl text-slate-500">Gudangnya Mobil Berkualitas</p>
    <br>
    <h3 class="text-2xl mb-1">View Products Example</h3>
    <div class="grid grid-cols-3 w-[80%] gap-2">
        <button data-modal-target="360pajero" data-modal-toggle="360pajero" class="w-full bg-[url('../360/pajero.jpg')] bg-cover">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </button>
        <button data-modal-target="360jazz" data-modal-toggle="360jazz" class="w-full bg-[url('../360/jazz.jpg')] bg-cover">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </button>
        <button data-modal-target="360avanza" data-modal-toggle="360avanza" class="w-full bg-[url('../360/avanza.jpeg')] bg-cover">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </button>
    </div>
    <br>
    @foreach ($citys as $city)
    <h3 class="text-2xl mb-1">Kota {{ $city->city }}</h3>
    <div class="grid grid-cols-5 w-[90%] gap-2">
        <?php $num = 0; ?>
        @foreach ($products as $product)
        @if ($product->locations == $city->id)
        <?php $num++; ?>
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="w-full bg-slate-300">
            <img src="../gambar/{{ $product->image }}" width="100%">
        </button>
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Detail
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-6 space-y-6">
                        <center>
                            <img src="../gambar/{{ $product->image }}" width="500px">
                            <p><b>{{ $product->name }} {{ $product->type }}</b></p>
                            <p><b>{{ $product->year }}</b></p>
                            <p><b>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</b></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <center><b class="text-red-500"><?= $num == 0 ? 'Tidak ada mobil tersedia di kota ini' : '' ?></b></center>
    @endforeach
</center>
@endsection

<div id="360pajero" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Pajero Sport
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="360pajero">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <iframe class="w-full" src="../360/pajero.html" height="80%"></iframe>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, magni.</p>
            </div>
        </div>
    </div>
</div>
<div id="360jazz" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Jazz SR
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="360jazz">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <iframe class="w-full" src="../360/jazz.html" height="80%"></iframe>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, magni.</p>
            </div>
        </div>
    </div>
</div>
<div id="360avanza" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Avanza
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="360avanza">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <iframe class="w-full" src="../360/avanza.html" height="80%"></iframe>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, magni.</p>
            </div>
        </div>
    </div>
</div>
