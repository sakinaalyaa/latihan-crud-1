<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;



Route::get('/', [DashboardController::class, 'index']);
Route::resource('pegawai',PegawaiController::class);


