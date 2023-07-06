@extends('admin.base')

@section('title')
    Galeri
@endsection

@section('main')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row table-responsive ml-1">
                <div class="table-responsive">
                    <div style="text-align: right" class="mb-3 pr-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah Gambar Galery</button>
                    </div>
                    <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; ?>
                            @foreach ($galerys as $galery)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td><img src="../galery/{{ $galery->file }}" width="100px"></td>
                                <td>
                                    <button class="btn btn-md btn-danger btn-delete" data-toggle="modal" data-target="#delete{{ $galery->id }}">Hapus</button>
                                    <div class="modal fade" id="delete{{ $galery->id }}" tabindex="-1" role="dialog" aria-labelledby="delete{{ $galery->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.delete-galery') }}" method="post">
                                                    @method('delete')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete{{ $galery->id }}Label">Hapus Gambar Galery</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $galery->id }}">
                                                        <input type="hidden" name="image" value="{{ $galery->file }}">
                                                        <center>
                                                            <img src="../galery/{{ $galery->file }}" width="250px">
                                                        </center>
                                                        <b>Apakah kamu yakin akan menghapus gambar Galery ini?</b>
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
            <form action="{{ route('admin.create-galery') }}" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah Gambar Galery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="file" class="form-control mb-2" placeholder="Gambar" name="image" required>
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
