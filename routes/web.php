<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


Route::middleware("auth")->group(function(){
        Route::get('admin/', [BukuTamuController::class, 'dashboardView'])->name("dashboardView");
        Route::get('admin/register', [LoginController::class, 'registerView'])->name("register"); 
        Route::post('admin/register', [LoginController::class, 'registerPost'])->name("registerPost"); 
        Route::get('admin/pegawai', [PegawaiController::class, 'index'])->name("pegawai");
        Route::get('admin/addpegawai', [PegawaiController::class, 'create'])->name("addPegawai");
});

Route::get('/', function () {
    return view('buku_tamu');
});

Route::post("/bukutamu", [BukuTamuController::class, 'store'])->name("addBT");

Route::post('admin/logout', [LoginController::class, 'logout'])->name("Logout");
Route::get('admin/login', [LoginController::class, 'loginView'])->name("login"); 
Route::post('admin/login', [LoginController::class, 'loginPost'])->name("loginPost");
