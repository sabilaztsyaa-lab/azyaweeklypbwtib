Route::get('/berita', function () {

    $data_berita = [
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

    return view('Berita', [
        'title' => 'Berita',
        'beritas' => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slug) {

    $data_berita = [
        'mahasiswa-ti' => [
            'judul' => 'Mahasiswa TI',
            'slug' => 'mahasiswa-ti',
            'penulis' => 'Azya',
            'konten' => 'Mahasiswa Teknologi Informasi mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang teknologi informasi.',
        ],
        'mahasiswa-informatika' => [
            'judul' => 'Mahasiswa Informatika',
            'slug' => 'mahasiswa-informatika',
            'penulis' => 'Fandi',
            'konten' => 'Mahasiswa Informatika mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang informatika.',
        ],
    ];

    if (!isset($data_berita[$slug])) {
        abort(404);
    }

    return view('beritatunggal', [
        'title' => $data_berita[$slug]['judul'],
        'berita' => $data_berita[$slug],
    ]);
});