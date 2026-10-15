<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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


Route::get('/berita', function () {

    return view('berita', [
        'title' => 'Berita',
        'beritas' => Berita::ambilberita(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {

    abort_if(!Berita::getBerita($slug), 404);

    return view('beritatunggal', [
        'title' => Berita::getTitle($slug),
        'berita' => Berita::getBerita($slug),
    ]);
});