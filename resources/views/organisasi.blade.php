@extends('master')

@section('section')
    <h1 class="serv text-body text-center"><b>Struktur Keanggotaan</b></h1>
    <section>
        <h2 class="serv text-body text-center"><b>BPH</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
@endsection
