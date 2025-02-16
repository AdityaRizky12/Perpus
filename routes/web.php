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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/publisher', [App\Http\Controllers\PublisherController::class, 'index']);
Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index']);
Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
Route::post('/catalog', [App\Http\Controllers\CatalogController::class, 'store']);
Route::get('/catalog/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
Route::put('/catalog/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
Route::delete('/catalog/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);