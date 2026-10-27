<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Azya',
        'nim' => '13242520061',
        'prodi' => 'Teknologi Informasi',
        'gambar' => 'azya.jpg',
    ]);
});


Route::get('/berita', [BeritaController::class, 'tampilBerita']);
Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);