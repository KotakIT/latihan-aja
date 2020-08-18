@extends('app')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container mt-3">
        <h1>Tambah Mahasiswa</h1>
        <form action="/mahasiswa/tambah" method="post">
        {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <button type="submit" class="btn btn-primary form-control">TAMBAH</button>
                </div>
            </div>
        </form>
    </div>
@endsection