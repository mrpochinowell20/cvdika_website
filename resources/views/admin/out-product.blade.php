@extends('admin.base')

@section('title')
    Produk Keluar
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
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Keuntungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; ?>
                            @foreach ($outProducts as $product)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->type }}</td>
                                <td><img src="../gambar/{{ $product->image }}" width="100px"></td>
                                <td>{{ $product->year }}</td>
                                <td>{{ $product->description }}</td>
                                <td>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</td>
                                <td>Rp.{{ number_format($product->range_sold, 2, ',', '.') }}</td>
                                <td>Rp.{{ number_format($product->range_sold-$product->range_ori, 2, ',', '.') }}</td>
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
