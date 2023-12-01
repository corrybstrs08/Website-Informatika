@extends('master')

@section('section')
    <h1 class="serv text-body"><b>Dosen</b></h1>
    <section>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($dosen as $item)
                    <a href="/detailDosen/{{ $item->id }}" class="card-link">
                        <div class="card m-2" style="width: 18rem; height: 10rem;">
                            <div class="text-center mt-3">
                                <img class="gbrDosen img-fluid" src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                                <p class="text-center dosen-name mt-3"><strong>{{ $item->nama }}</strong></p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
