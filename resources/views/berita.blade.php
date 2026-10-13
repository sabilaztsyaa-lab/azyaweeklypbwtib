@extends('layouts.main')

@section('content')
    <div class="container mt-5">

        @foreach ($beritas as $berita)
            <article class="mb-4">

                <h2>
                    <a href="/berita/{{ $berita['slug'] }}">
                        {{ $berita['judul'] }}
                    </a>
                </h2>

                <h5>Penulis: {{ $berita['penulis'] }}</h5>

                <p>{{ $berita['konten'] ?? $berita['isi'] }}</p>

            </article>

            <hr>
        @endforeach

    </div>
@endsection