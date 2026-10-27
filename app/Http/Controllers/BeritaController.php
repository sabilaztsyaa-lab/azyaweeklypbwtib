<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    //melakukan handling
    public function tampilBerita()
    {
        return view('berita', [
            'title' => 'Berita',
            'beritas' => Berita::all(),
            //Berita disebut eloquent model, eloquent model adalah class yang berhubungan dengan database
            //beritas akan mengirimkan dri database ke Berita
        ]);
    }

    public function getBerita(string $slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('beritatunggal', [
            'title' => $berita->judul,
            'berita' => $berita,
        ]);
    }
}