
@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h2>{{ $berita['judul'] }}</h1>
        <h5>{{ $berita['penulis'] }}</h5>
    </div>

    <div class="text-justify">
        <p>{{ $berita['konten'] }}</p>
    </div>

    <a href="/berita">Kembali ke Berita</a>
@endsection
