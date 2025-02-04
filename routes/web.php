<?php

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
    return view('welcome');
});

Route::get('/jenissakitgigi', function () {
    return view('jenissakitgigi');
});

Route::get('/caramerawatgigi', function () {
    return view('caramerawatgigi');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
})->name('home');
Route::get('/register.blade.php', function () {
    return view('register');
});
Route::get('/Webcam', function () {
    return view('Webcam');
});

Route::get('/upload123', [UploadController::class, 'upload'])->name('penyakit_gigi');

Route::post('/upload123/proses', [UploadController::class, 'unggah_gambar'])->name('unggah_gambar');
