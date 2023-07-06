<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan</title>
    <style type="text/css">
        body{
        font-family: sans-serif;
        }
        table{
        margin: 20px auto;
        border-collapse: collapse;
        }
        table th,
        table td{
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

        }
        a{
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
        }

           .tengah{
               text-align: center;
           }
        </style>
</head>
<center>
<body>
    @foreach ($data as $product)
    @endforeach
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-2 justify-content-center">
                            <img src="data:image/jpeg;base64,{{ $gambar}}" class="img-fluid" width="120" height="90">
                        </div>
                        <div class="col-md-10">
                            <h1 class="fw-bolder text-uppercase">CV. DIKA LANGGENG TRIJAYA</h1>
                            <h5 class="fw-bold">Alamat: Jalan raya solo-maospati nomor 7, Kabupaten Magetan</h5>
                            <h6>Kontak: 081359294722 | Email: dikalanggengtrijayacv@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fw-bolder text-black">
    <h1 class="judul-laporan">Laporan Penjualan</h1>
    <h2 class="subjudul-laporan">Periode {{ date('d M Y', strtotime($product->date_out)) }}</h2><br>

    <hr class="fw-bolder text-black"><br>
    <table class="tabel-laporan">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Tipe Produk</th>
                <th>Warna Produk</th>
                <th>Transmisi</th>
                <th>Bahan Bakar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->colour }}</td>
                <td>{{ $product->transmisi }}</td>
                <td>{{ $product->bahan_bakar }}</td>
            </tr>
        </tbody>
    </table><br><br>
    <table>
        <head>
            <tr>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Total Keuntungan</th>
            </tr>
        </head>
        <tbody>
            <tr>
                <td>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</td>
                <td>Rp.{{ number_format($product->range_sold, 2, ',', '.') }}</td>
                <td>Rp.{{ number_format($product->range_sold - $product->range_ori, 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table><br><br>
    <div class="row">
        <small class="fw-bold">*NB: Dokumen ini sah tanpa tanda tangan</small>
    </div>

    <script>
        // Optional: Menjalankan cetak secara otomatis setelah halaman dimuat
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</center>
</html>
