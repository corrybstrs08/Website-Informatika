@extends('master')

@section('section')
    <h1 class="serv text-body"><b>Struktur Keanggotaan</b></h1>
    <section>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi as $item)
                    <div class="card-link">
                        <div class="card m-2" style="width: 18rem; height: 10rem;">
                            <div class="text-center">
                                <img class="gbrDosen img-fluid mt-2 mb-2" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                                <p class="text-center"><strong>{{ $item->nama }}</strong></p>
                                <p class="text-center">{{ $item->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
