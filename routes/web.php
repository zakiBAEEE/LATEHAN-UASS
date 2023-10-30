<?php

use App\Http\Controllers\anggotaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pendaftaran');
});

Route::get('/pendaftaran/submit', [anggotaController::class, 'insertElq']);

Route::get('/daftarAnggota', [anggotaController::class, 'tampilData']);