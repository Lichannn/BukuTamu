<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('buku_tamu');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('admin/', function () {
    return view('admin/dashboard');
});