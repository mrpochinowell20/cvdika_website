{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    @foreach ($products as $product)
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-2 justify-content-center">
                            <img src="https://th.bing.com/th/id/OIP._fc3JmgZUAeM-HvvfazRDQHaJ4?pid=ImgDet&rs=1"
                                class="img-fluid" width="90" height="40">
                        </div>
                        <div class="col-md-10">
                            <h1 class="fw-bolder text-uppercase">CV. DIKA LANGGENG TRIJAYA</h1>
                            <h5 class="fw-bold">Alamat: Jalan raya solo-maospati nomor 7, Kabupaten Magetan</h5>
                            <h6>Kontak: 0889-0901-1292 | Email: dikajaya@mail.com</h6>
                        </div>
                    </div>
                    <hr class="fw-bolder text-black">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h3>LAPORAN PENJUALAN</h3>
                            <h6 class="text-uppercase">PERIODE {{ date('d M Y', strtotime($product->date_out)) }}</h6>
                        </div>
                    </div>
                    <hr class="fw-bolder text-black">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase" for="nama_product">Nama Product</label>
                                <h6>{{ $product->name }}</h6>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase">Tipe Product</label>
                                <h6>{{ $product->type }}</h6>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase">Tahun Product</label>
                                <h6>{{ $product->year }}</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase" for="nama_product">Harga Beli</label>
                                <h6>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</h6>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase">Harga Jual</label>
                                <h6>Rp.{{ number_format($product->range_sold, 2, ',', '.') }}</h6>
                            </div>
                        </div>
                    </div>
                    <hr class="fw-bolder text-black">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="fw-bolder text-uppercase">Total Keuntungan</label>
                                <h6>
                                    Rp.{{ number_format($product->range_sold - $product->range_ori, 2, ',', '.') }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <hr class="fw-bolder text-black">
                    <div class="row">
                        <div class="col-md-4 text-start">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Best Regards,</h6>
                                    <div class="row">
                                        <div class="col-4">
                                            <br><br><br><br>
                                        </div>
                                        <div class="col-8">
                                            <img src="{{ asset('stamp.png') }}" class="img-fluid" width="100"
                                                height="85">
                                        </div>
                                    </div>
                                    CV. Dika
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <small class="fw-bold">*NB: Dokumen ini sah tanpa tanda tangan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    INI ADALAH HALAMAN NOTA
</body>
</html>
