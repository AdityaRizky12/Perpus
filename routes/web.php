<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Menambahkan rute autentikasi (login, register, dll)
Auth::routes();

// Rute untuk halaman home setelah login
Route::get('/home', [HomeController::class, 'index'])->name('home');
