@extends('admin.base')

@section('title')
    Change Password
@endsection

@section('main')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth-change-password') }}" method="post">
                @method('put')
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password3" id="password3" placeholder="Re-New Password">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
