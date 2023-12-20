@extends('master')

@section('section')

<div class="text-white">

    <div class="mx-2 p-2" style="background-color: rgb(150, 164, 200) ;border-radius: 10px;">
        <h1>Hasil Pencarian yang sesuai dengan : {{ $cari }}</h1>
    </div>
    <br>

    {{-- events --}}
    @if (!$events->isEmpty())
    <h1 class="ms-3"><strong>| EVENTS</strong></h1>
    @foreach ($events as $event)
    <div class="ms-5 p-2 " style="background-color: rgb(156, 173, 206) ;border-radius: 25px;">
        <div class="d-flex mt-2">
            <div id="tanggal" class="d-flex justify-content-center">
                <p class="text-center w-100 p-2 m-2" style="background-color: rgb(130, 164, 200);">
                    {{ substr($event->waktu_mulai, 9, 2) }}
                    @if (intval(substr($event->waktu_mulai, 5, 2)) == 1)
                    Januari
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 2)
                    Februari
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 3)
                    Maret
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 4)
                    April
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 5)
                    Mei
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 6)
                    Juni
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 7)
                    Juli
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 8)
                    Agustus
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 9)
                    September
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 10)
                    Oktober
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 11)
                    November
                    @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 12)
                    Desember

                    @endif
                    {{-- tahun --}}
                    <br>
                    {{ substr($event->waktu_mulai, 0, 4) }}
                </p>
            </div>
            <div class="ms-2">
                <a href="/event/{{ $event->id }}">
                    <h2>{{ $event->nama }}</h2>
                </a>
                <p>{{ $event->deskripsi_singkat }}</p>
            </div>
        </div>
        <hr class="w-75">
    </div>
    <br>
    @endforeach
    @endif


    {{-- Berita --}}

    @if (!$berita->isEmpty())
    <div class="text-light ms-3">
        <h1><b>| Berita Terkini </b></h1>
    </div>

    @foreach ($berita as $item)
    <div class="mx-5" style="border-radius: 20px; background-color:rgb(156, 173, 206)">
        <div class="berita d-flex p-3">
            <img src="{{ asset('asset/img/Berita/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="height:225px;width:400px">
            <div class="ms-3 pt-4 text-light">
                <h3>{{ $item->judul }}</h3>
                <p>{{ $item->deskripsi }}</p>
                <a href="/berita/{{ $item->id }}"><button type="button" class="btn btn-primary">Selengkapnya</button></a>
            </div>
        </div>
    </div>
    <br>
    @endforeach
    @endif

    {{-- Kompetisi --}}
    @if (!$kompetisi->isEmpty())
    <h1 class="ms-3"><strong>| Kompetisi</strong></h1>
    <br>

    <ul style="list-style: none;">
        @foreach ($kompetisi as $item)
        <div class="p-2" style="border-radius: 25px; background-color: rgb(120, 138, 175);">
            <li>
                <h2 style="color:rgba(150, 208, 255, 1)"><a href="/kompetisi/{{ $item->id }}">{{ $item->nama }}</a></h2>
                <p>{{ $item->keterangan }}</p>
                <p style="color:rgba(230, 230, 4, 0.788)">{{ $item->tanggal }}</p>
            </li>
        </div>
        @endforeach
    </ul>
</div>
@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    @endsection