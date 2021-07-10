<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('salam');
});

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/cetak_pdf', [App\Http\Controllers\BlogController::class, 'cetak_pdf']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home/cetak_pdf', [App\Http\Controllers\SiswaController::class, 'index'])->name('cetak_pdf');

Auth::routes();


Route::resource('siswas', App\Http\Controllers\SiswaController::class);

