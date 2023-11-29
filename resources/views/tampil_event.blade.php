@extends('master')

@section('section')

    <div >
        <h1 class=" container text-light"><b>{{$event->nama}}</b></h1>
        <br>

        <div class="container p-3 text-dark rounded-4   " style="background: rgba(255, 255, 255, 0.5);">
            <p><b>Jenis</b></p>
            <p>{{$event->jenis}}</p>

            <p><b>Agenda</b></p>
            <p>{{$event->waktu_mulai}}</p>

            <p><b>Lokasi</b></p>
            <p>{{$event->lokasi}}</p>

            <p><b>Penyelenggara</b></p>
            <p>{{$event->penyelenggara}}</p>

            <p><b>Kontak</b></p>
            <p>{{$event->kontak}}</p>

            <p><b>Deskripsi</b></p>
            <p>{{$event->deskripsi}}</p>
        </div>

        <br>
        <div class="container text-light text-center">
            <p">{{$event->penjelasan}}</p>
        </div>
    </div>

@endsection