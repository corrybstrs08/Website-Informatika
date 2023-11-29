@extends('master')

@section('section')
<h1 class="text-light ms-5"><b>Dosen</b></h1>
<section>
    <div class="serv text-body">
        <ul>
            @foreach ($dosen as $item)

            <div class="card opacity-50" style="width: 18rem; height: 10rem; border: radius 30%;">
                <div>
                    <div class="d-flex justify-content-center mt-3">
                        <img class="gbrDosen " src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                    </div>
                    <br>
                    <p class="text-center ">{{ $item->nama }}</p>
                </div>
            </div>

            @endforeach
        </ul>
    </div>
</section>
@endsection