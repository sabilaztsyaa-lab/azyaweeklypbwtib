<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home', [
        "title"=> "Home",
    ]) ;
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Sabilaa Azka",
        "nim" => "13242520061",
        "prodi" => "Teknologi Informasi",
        "gambar" => "azy.jpeg",

        
    ]);
});


Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});

Route::get('/contact', function () {
    return view ('contact') ;
});