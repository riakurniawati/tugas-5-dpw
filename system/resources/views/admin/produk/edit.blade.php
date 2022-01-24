@extends('admin.template.app')
@section('title', 'Edit data Produk')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Edit Data Produk
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/produk', $produk->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="from-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" value="{{$produk->nama}}" id="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" name="harga" value="{{$produk->harga}}" id="" class="form-control">
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="from-group">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" name="berat" value="{{$produk->berat}}" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="from-group">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" name="stok" value="{{$produk->stok}}" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                       
                            <div class="from-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                            
                            </div>
                            <button class="btn btn-dark float-right mb-3 mt-2"><i class="fa fa-save"></i> Simpan </button>
                    </form>
                    </div>
                </div>           
            </div>
        </div>
    </div>

@endsection