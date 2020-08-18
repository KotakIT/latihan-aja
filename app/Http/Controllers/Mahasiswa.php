<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Mahasiswa extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama_lengkap' => $request->input("nama_lengkap"),
            'kota' => $request->input("kota")
        ]);

        return redirect("/mahasiswa");
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('nim', $id)->get();
        return view('edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('mahasiswa')->where('nim', $request->nim)->update([
            'nama_lengkap' => $request->input("nama_lengkap"),
            'kota' => $request->input("kota")
        ]);

        return redirect('/mahasiswa');
    }
}
