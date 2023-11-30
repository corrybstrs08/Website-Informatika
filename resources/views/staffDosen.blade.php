@extends('master')

@section('section')
<h1 class="serv text-body"><b>Dosen</b></h1>
<section>
    <div class="serv text-body">
        <ul>
            @foreach ($dosen as $item)
            <a href="/detailDosen/{{ $item->id }}" class="card-link">
                <div class="card opacity-50" style="width: 18rem; height: 10rem; border: radius 30%;">
                    <div>
                        <div class="d-flex justify-content-center mt-3">
                            <img class="gbrDosen" src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                        </div>
                        <br>
                        <p class="text-center dosen-name"><strong>{{ $item->nama }}</strong></p>
                    </div>
                </div>
            </a>
            @endforeach
        </ul>
    </div>
</section>
@endsection