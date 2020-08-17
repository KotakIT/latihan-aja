@extends('app')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container">
        <h2 class="mt-5">Data mahasiswa</h2>
        <table class="table table-striped">
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Kota</th>
            <th>Aksi</th>
        </tr>
           @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nim}}</td>
            <td>{{ $m->nama_lengkap}}</td>
            <td>{{ $m->kota}}</td>
            <td>
                <a href="/mahasiswa/edit/{{$m->nim}}" class="badge badge-warning">Edit</a>
                <a href="/mahasiswa/hapus/{{$m->nim}}" class="badge badge-danger">hapus</a>
            </td>
        </tr>    
           @endforeach
       
         
        </table>
    </div>
@endsection