@extends('master')

@section('section')

<div class="text-body container">
    <h1 >{{ $berita->judul }}</h1>

</div>

<br><br>

<div class="d-flex justify-content-center container">
    <img src="{{ asset('asset/img/Berita/' . $berita->gambar) }}"
                                            alt="{{ $berita->gambar }}" style="border-radius:9px 9px 0px 0;">
</div>

<br><br>
<div class= "text-body container">

    <p class="text-full">{{ $berita->isi  }}</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
@endsection