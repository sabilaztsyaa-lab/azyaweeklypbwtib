
@extends('layouts.main')

@section('content')
    <div class="mt-5">
        <h1>{{ $berita['judul'] }}</h1>
        <h5>Penulis: {{ $berita['penulis'] }}</h5>
        <p>{{ $berita['konten'] }}</p>

        <a href="/berita">Kembali ke Berita</a>
    </div>
@endsection
