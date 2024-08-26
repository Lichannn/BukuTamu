<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('buku_tamu');
});
Route::get('admin/login', [LoginController::class, 'loginView'])->name("viewLogin"); 

// Route::group(['middleware', 'guest'] , function () {
    Route::get('admin/', function () {
        return view('admin/dashboard');
    });
    Route::get('admin/register', [LoginController::class, 'registerView'])->name("register"); 
    Route::post('admin/register', [LoginController::class, 'registerPost'])->name("registerPost"); 
// });