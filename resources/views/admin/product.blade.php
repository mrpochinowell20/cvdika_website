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
                    <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Gambar</th>
                                <th>Tahun</th>
                                <th>Deskripsi</th>
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
                                <td><img src="../gambar/{{ $product->image }}" width="100px"></td>
                                <td>{{ $product->year }}</td>
                                <td>{{ $product->description }}</td>
                                <td><?= $product->range_sold == NULL ? 'Tersedia' : 'Terjual' ?></td>
                                <td>
                                    @if ($product->range_sold == NULL)
                                    <button class="btn btn-link" data-toggle="modal" data-target="#update{{ $product->id }}">Jual</button>
                                    @endif
                                    <div class="modal fade" id="update{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="update{{ $product->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.update-product') }}" method="post">
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="update{{ $product->id }}Label">Update Product</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="number" min="{{ $product->range_ori }}" class="form-control mb-2" placeholder="Harga Jual" name="range_sold" required>
                                                        <input type="text" class="form-control mb-2" placeholder="Lokasi Pembelian" name="locations" required>
                                                        <input type="date" class="form-control mb-2" placeholder="Tanggal Keluar" name="date_out" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
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
    $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );
                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                } );
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( ''+d+'' )
                } );
            } );
        }
    });
</script>
@endsection
