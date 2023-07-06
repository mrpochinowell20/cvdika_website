@extends('admin.base')

@section('title')
    Produk Keluar
@endsection

@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <form method="GET">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dari">Dari:</label>
                                                <input type="date" id="dari" name="dari" class="form-control" max="{{ date('Y-m-d') }}" value="{{ old('dari', request()->input('dari')) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sampai">Sampai:</label>
                                                <input type="date" id="sampai" name="sampai" class="form-control" max="{{ date('Y-m-d') }}" value="{{ old('sampai', request()->input('sampai')) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-secondary">Filter</button>
                                        <button type="button" class="btn btn-primary" onclick="var dari=document.getElementById('dari').value; var sampai=document.getElementById('sampai').value; var url='{{ route('admin.out-product.cetak') }}?dari='+dari+'&sampai='+sampai; window.location.href=''+url+''">Cetak</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Image</th>
                                <th>Tahun</th>
                                {{-- <th>warna</th>
                                <th>Transisi</th>
                                <th>Bahan Bakar</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Keuntungan</th> --}}
                                <th>Tanggal Keluar</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $num = 1; ?>
                            @foreach ($outProducts as $product)
                                <tr>
                                    <td>{{ $num++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td><img src="{{ asset('image/'.$product->image) }}" width="100px"></td>
                                    <td>{{ $product->year }}</td>
                                    {{-- <td>{{ $product->colour }}</td>
                                    <td>{{ $product->transmisi }}</td>
                                    <td>{{ $product->bahan_bakar }}</td>
                                    <td>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</td>
                                    <td>Rp.{{ number_format($product->range_sold, 2, ',', '.') }}</td>
                                    <td>Rp.{{ number_format($product->range_sold - $product->range_ori, 2, ',', '.') }}
                                    </td> --}}
                                    <td>{{ date('d M Y', strtotime($product->date_out)) }}</td>
                                    <td>
                                        <a type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#cetak_dokumen_{{ $product->id }}">Detail</a>
                                    </td>
                                    {{-- <td>
                                    <a href="{{ route('admin.detail-out-product') }}"
                                        class="btn btn-md btn-warning mr-2 mb-2 mb-lg-0"><i
                                            class="fas fa-hand-point-up"></i> Detail</a> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- Modal Cetak --}}
    @foreach ($outProducts as $product)
        <div class="modal fade" id="cetak_dokumen_{{ $product->id }}" tabindex="-1" role="dialog"
            aria-labelledby="CETAK DOKUMEN" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Detail Laporan</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h1 class="fw-bolder text-uppercase">CV. DIKA LANGGENG TRIJAYA</h1>
                                        <h5 class="fw-bold">Alamat: Jalan raya solo-maospati nomor 7, Kabupaten Magetan</h5>
                                        <h6>Kontak: 081359294722 | Email: dikalanggengtrijayacv@gmail.com</h6>
                                    </div>
                                </div>
                                <hr class="fw-bolder text-black">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h3>LAPORAN PENJUALAN</h3>
                                        <h6 class="text-uppercase">PERIODE
                                            {{ date('d M Y', strtotime($product->date_out)) }}
                                        </h6>
                                    </div>
                                </div>
                                <hr class="fw-bolder text-black">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="fw-bolder text-uppercase" for="nama_product">Nama Produk</label>
                                            <h6>{{ $product->name }}</h6>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bolder text-uppercase">Tipe Produk</label>
                                            <h6>{{ $product->type }}</h6>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bolder text-uppercase">Tahun Produk</label>
                                            <h6>{{ $product->year }}</h6>
                                            <div class="mb-3">
                                                <label class="fw-bolder text-uppercase">Warna Produk</label>
                                                <h6>{{ $product->colour }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="fw-bolder text-uppercase">Transmisi</label>
                                            <h6>{{ $product->transmisi }}</h6>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bolder text-uppercase">Bahan Bakar</label>
                                            <h6>{{ $product->bahan_bakar }}</h6>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="out-product/{{ $product->id }}" class="btn btn-success">CETAK LAPORAN</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('script')
    <script>
        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });
                    column.data().unique().sort().each(function(d, j) {
                        select.append('' + d + '')
                    });
                });
            }
        });
    </script>
@endsection
