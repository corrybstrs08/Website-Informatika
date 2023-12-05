@extends('master')

@section('section')

    <div >
        <h1 class=" container text-body"><b>{{$kompetisi->nama}}</b></h1>
        <br>

        <div class="container p-3 text-dark rounded-4   " style="background: rgba(255, 255, 255, 0.5);">
            <p><b>Tanggal Kegiatan</b></p>
            <p>{{$kompetisi->tanggal}}</p>

            <p><b>Penyelenggara</b></p>
            <p>{{$kompetisi->penyelenggara}}</p>

            <p><b>Keterangan</b></p>
            <p>{{$kompetisi->keterangan}}</p>

            <p><b>Brosur</b></p>
            <img src="{{ asset('asset/img/Kompetisi/' . $kompetisi->gambar) }}" alt="">

            <br><br>
            <p><b>Link Lebih Lanjut</b></p>
            <a href="{{$kompetisi->link}}">{{$kompetisi->link}}</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
@endsection
