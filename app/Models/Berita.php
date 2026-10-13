<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Berita 1",
            "slug" => "berita-1",
            "penulis" => "Penulis 1",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "judul" => "Berita 2",
            "slug" => "berita-2",
            "penulis" => "Penulis 2",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        return collect(self::$data_berita)
            ->firstWhere('slug', $slug);
    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);

        return $berita['judul'] ?? 'Berita tidak ditemukan';
    }
}