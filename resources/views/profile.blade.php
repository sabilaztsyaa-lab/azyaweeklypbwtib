@extends('layouts.main')


@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $name }}</p>
    <p>Nim : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }}</p>

<img src="{{ asset('images/' . $gambar) }}" width="200"></img>
@endsection