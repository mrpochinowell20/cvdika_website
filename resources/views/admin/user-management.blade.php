@extends('admin.base')

@section('title')
    User Management
@endsection

@section('main')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row table-responsive ml-1">
                <div class="table-responsive">
                    <div style="text-align: right" class="mb-3 pr-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah User</button>
                    </div>
                    <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; ?>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->level }}</td>
                                <td>
                                    <button class="btn btn-md btn-info" data-toggle="modal" data-target="#update{{ $user->id }}">Edit</button>
                                    <button class="btn btn-md btn-danger btn-delete" data-toggle="modal" data-target="#delete{{ $user->id }}">Hapus</button>
                                    <div class="modal fade" id="update{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="update{{ $user->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.update-user') }}" method="post">
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="update{{ $user->id }}Label">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <input type="text" class="form-control mb-2" placeholder="Username" name="username" readonly value="{{ $user->username }}">
                                                        <input type="text" class="form-control mb-2" placeholder="Full Name" name="name" required value="{{ $user->name }}">
                                                        <select name="level" class="form-control mb-2" required>
                                                            <option value="">Level</option>
                                                            <option value="Admin" selected>Admin</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="delete{{ $user->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.delete-user') }}" method="post">
                                                    @method('delete')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete{{ $user->id }}Label">Hapus User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <b>Apakah yakin akan menghapus data ({{ $user->name }})?</b>
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
            <form action="{{ route('admin.create-user') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" placeholder="Username" name="username" required>
                    <input type="text" class="form-control mb-2" placeholder="Full Name" name="name" required>
                    <select name="level" class="form-control mb-2" required>
                        <option value="">Level</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <input type="password" class="form-control mb-2" placeholder="Password" name="password" required>
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
