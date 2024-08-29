<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


Route::middleware("auth")->group(function(){
        //Route dashboard
        Route::get('admin/', [BukuTamuController::class, 'dashboardView'])->name("dashboardView");
        Route::get('admin/register', [LoginController::class, 'registerView'])->name("register"); 
        Route::post('admin/register', [LoginController::class, 'registerPost'])->name("registerPost"); 
        //Route Pegawai
        Route::get('admin/pegawai', [PegawaiController::class, 'index'])->name("pegawai");
        Route::get('admin/addpegawai', [PegawaiController::class, 'create'])->name("addPegawai");
        Route::post('admin/addpegawai-store', [PegawaiController::class, 'store'])->name("addPegawaiStore");
        //Route Edit Pegawai
        Route::get('admin/editpegawai/{id}', [PegawaiController::class, 'edit'])->name("editPegawai");
        Route::put('admin/editpegawai-update/{id}', [PegawaiController::class, 'update'])->name("editPegawaiUpdate");
        //Route Delete pegawai
        Route::delete('admin/deletepegawai/{id}', [PegawaiController::class, 'destroy'])->name("deletePegawai");
        //Route Buku Tamu
        Route::get('admin/buku/', [BukuTamuController::class, 'create'])->name("Buku");
        //Route editBukuTamu
        Route::get('admin/editbuku/{id}', [BukuTamuController::class, 'edit'])->name("editBuku");
        Route::put('admin/editbuku-update/{id}', [BukuTamuController::class, 'update'])->name("editBukuUpdate");
        //Route Delete Buku Tamu
        Route::delete('admin/deletebuku/{id}', [BukuTamuController::class, 'destroy'])->name("deleteBuku");
        
});

Route::get('/', function () {
    return view('buku_tamu');
})->name('home');

Route::post("/bukutamu", [BukuTamuController::class, 'store'])->name("addBT");

Route::post('admin/logout', [LoginController::class, 'logout'])->name("Logout");
Route::get('admin/login', [LoginController::class, 'loginView'])->name("login"); 
Route::post('admin/login', [LoginController::class, 'loginPost'])->name("loginPost");
