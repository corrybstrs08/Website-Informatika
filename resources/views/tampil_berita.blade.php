@extends('master')

@section('section')

<div class="text-light container">
    <h1 >{{ $berita->judul }}</h1>
    
</div>

<br><br>

<div class="d-flex justify-content-center container">
    <img src="{{ asset('asset/img/Berita/' . $berita->gambar) }}"
                                            alt="{{ $berita->gambar }}" style="border-radius:9px 9px 0px 0;">
</div>

<br><br>
<div class="text-light container">
    
    <p>{{ $berita->isi  }}</p>
</div>

@endsection