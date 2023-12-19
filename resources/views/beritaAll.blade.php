@extends('master')

@section('section')
    <div class="text-light container">
        <h1><b>Berita Terkini </b></h1>
    </div>

    @foreach ($berita as $item)
    <div class="mx-5" style="border-radius: 20px; background-color:rgb(156, 173, 206)">
        <div class="berita d-flex p-3">
            <img src="{{ asset('asset/img/Berita/' . $item->gambar) }}" alt="{{ $item->gambar }}"
                style="height:225px;width:400px">
            <div class="ms-3 pt-4 text-light">
                <h3>{{ $item->judul }}</h3>
                <p>{{ $item->deskripsi }}</p>
                <a href="/berita/{{ $item->id }}"><button type="button"
                    class="btn btn-primary">Selengkapnya</button></a>
            </div>
        </div>
    </div>
    <br>
    @endforeach
    <div style="width: 50%; /* or any other width */
    margin: auto;">
        <br>
        {{ $berita->links('custom') }}
    </div>
@endsection
