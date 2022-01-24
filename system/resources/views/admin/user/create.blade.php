@extends('admin.template.app')
@section('title', 'Tambah User')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Tambah User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/user')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" required="">
                            </div>
                            <button class="btn btn-dark float-right mb-3 mt-2"><i class="fa fa-save"></i> Simpan </button>
                        </form>
                    </div>
                </div>           
            </div>
        </div>
    </div>

@endsection