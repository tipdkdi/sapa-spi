<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/pengaduan', function () {
    return view('pengaduan_create');
});

Route::get('/pengaduan/sukses', function () {
    return view('pengaduan_success');
});

Route::get('/pengaduan/cek', function () {
    return view('pengaduan_check');
});
