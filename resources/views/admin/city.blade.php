@extends('admin.base')

@section('title')
    Kota
@endsection

@section('main')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row table-responsive ml-1">
                <div class="table-responsive">
                    <div style="text-align: right" class="mb-3 pr-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah Kota</button>
                    </div>
                    <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kota</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; ?>
                            @foreach ($citys as $city)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $city->city }}</td>
                                <td>
                                    <button class="btn btn-md btn-info" data-toggle="modal" data-target="#update{{ $city->id }}">Edit</button>
                                    <button class="btn btn-md btn-danger btn-delete" data-toggle="modal" data-target="#delete{{ $city->id }}">Hapus</button>
                                    <div class="modal fade" id="update{{ $city->id }}" tabindex="-1" role="dialog" aria-labelledby="update{{ $city->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.update-city') }}" method="post">
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="update{{ $city->id }}Label">Edit Kota</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $city->id }}">
                                                        <input type="text" class="form-control mb-2" placeholder="Nama Kota" name="city" value="{{ $city->city }}" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="delete{{ $city->id }}" tabindex="-1" role="dialog" aria-labelledby="delete{{ $city->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.delete-city') }}" method="post">
                                                    @method('delete')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete{{ $city->id }}Label">Hapus Kota</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $city->id }}">
                                                        <b>Apakah kamu yakin ingin mengahapus data ({{ $city->city }})?</b>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
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
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.create-city') }}" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah Kota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" placeholder="Nama Kota" name="city" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
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
