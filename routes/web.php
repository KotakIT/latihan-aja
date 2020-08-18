<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::view('/', 'home');
Route::get('mahasiswa', 'Mahasiswa@index');

Route::get('mahasiswa/tambah', 'Mahasiswa@tambah');
Route::post('mahasiswa/tambah', 'Mahasiswa@store');