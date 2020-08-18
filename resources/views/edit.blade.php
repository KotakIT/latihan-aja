@extends('app')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container mt-3">
        <h1>Tambah Mahasiswa</h1>
        @foreach($mahasiswa as $m)
        <form action="/mahasiswa/edit" method="post">
        {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>NIM</label>
                    <input type="number" value="{{$m->nim}}" name="nim" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="{{$m->nama_lengkap}}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Kota</label>
                    <input type="text" name="kota" value="{{$m->kota}}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <button type="submit" class="btn btn-primary form-control">UBAH MAHASISWA</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
@endsection