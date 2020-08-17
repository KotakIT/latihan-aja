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
}
