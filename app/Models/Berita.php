<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            'judul' => 'Mahasiswa TI',
            'slug' => 'mahasiswa-ti',
            'penulis' => 'Azya',
            'konten' => 'Mahasiswa Teknologi Informasi mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang teknologi informasi.',
        ],
        [
            'judul' => 'Mahasiswa Informatika',
            'slug' => 'mahasiswa-informatika',
            'penulis' => 'Fandi',
            'konten' => 'Mahasiswa Informatika mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang informatika.',
        ],
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        foreach (self::$data_berita as $berita) {
            if ($berita['slug'] === $slug) {
                return $berita;
            }
        }
    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);

        return $berita['judul'] ?? 'Berita tidak ditemukan';
    }
}