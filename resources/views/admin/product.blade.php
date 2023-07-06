@extends('admin.base')

@section('title')
    Produk
@endsection

@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row table-responsive ml-1">
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
                                    <th>Warna</th>
                                    <th>Transmisi</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1; ?>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->type }}</td>
                                        <td><img src="../image/{{ $product->image }}" width="100px"></td>
                                        <td>{{ $product->year }}</td>
                                        <td>{{ $product->colour }}</td>
                                        <td>{{ $product->transmisi }}</td>
                                        {{-- <td>{{ $product->description }}</td> --}}
                                        <td>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</td>
                                        <td><?= $product->range_sold == null ? 'Tersedia' : 'Terjual' ?></td>
                                        <td>

                                            <button class="btn btn-md btn-success" data-toggle="modal"
                                                data-target="#detail_product_{{ $product->id }}">Detail</a>
                                                <button class="btn btn-md btn-danger btn-delete"
                                                    data-toggle="modal"data-target="#delete_product_{{ $product->id }}">Hapus</button>

                                                @if ($product->range_sold == null)
                                                    <button class="btn btn-md btn-info" data-toggle="modal"
                                                        data-target="#update{{ $product->id }}">Update</button>
                                                @endif

                                                {{-- Modal Detail --}}
                                                <div class="modal fade" id="detail_product_{{ $product->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title" id="exampleModalLabel">
                                                                    <{{ $product->name }}< /h1>
                                                                        <h1 class="text-4xl font-bold text-white-900"">
                                                                            <b>Detail
                                                                                Produk</b></h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-8">
                                                                                <img src="/image/{{ $product->image }}"
                                                                                    class="img-fluid">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3><b>Nama
                                                                                        Produk</b><br>{{ $product->name }}
                                                                                    <h3><b>Tipe</b><br>{{ $product->type }}
                                                                                    </h3>
                                                                                    <h4><b>Tahun</b><br>{{ $product->year }}
                                                                                    </h4>
                                                                                    <h4><b>Warna</b><br>{{ $product->colour }}
                                                                                    </h4>
                                                                                    <h4><b>Transmisi</b><br>{{ $product->transmisi }}
                                                                                    </h4>
                                                                                    <p>
                                                                                        <b>Deskripsi
                                                                                            Produk</b><br>{{ $product->description }}
                                                                                    </p>
                                                                                    <h5><b>Harga Beli</b><br>Rp.
                                                                                        {{ $product->range_ori }}</h5>
                                                                                    <h4><b>Status</b><br><?= $product->range_sold == null ? 'Tersedia' : 'Terjual' ?>
                                                                                    </h4>
                                                                                    <h4><b>Tanggal
                                                                                            Masuk</b><br>{{ date('d/m/Y', $product->date_in) }}
                                                                                    </h4>
                                                                            </div>
                                                                            {{-- <footer id="footer" class="footer-area pt-60"> --}}
                                                                            <div class="container">
                                                                                <div class="whatsapp-area wow fadeIn"
                                                                                    data-wow-duration="1s"
                                                                                    data-wow-delay="0.5s">
                                                                                    <div class="kolom-konten text-center">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="card">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Modal Update --}}
                                                <div class="modal fade" id="update{{ $product->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="update{{ $product->id }}Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form action="{{ route('admin.update-product') }}"
                                                                method="post">
                                                                @method('put')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="update{{ $product->id }}Label">Update Product
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $product->id }}">
                                                                    <input type="number" min="{{ $product->range_ori }}"
                                                                        class="form-control mb-2" placeholder="Harga Jual"
                                                                        name="range_sold" required>
                                                                    <input type="date" class="form-control mb-2"
                                                                        placeholder="Tanggal Keluar" name="date_out"
                                                                        required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Modal Delete --}}
                                                <div class="modal fade" id="delete_product_{{ $product->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Produk
                                                                    {{ $product->name }}?</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Anda Akan Melakukan Penghapusan Data {{ $product->name }}.
                                                                <b>Data Akan Terhapus Secara Permanen.</b> Apakah Anda
                                                                Setuju
                                                                Untuk Melakukan Hapus Data?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success"
                                                                    data-dismiss="modal">Batal</button>
                                                                <a href="in-product/{{ $product->id }}" type="button"
                                                                    class="btn btn-danger">
                                                                    Hapus Data
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
