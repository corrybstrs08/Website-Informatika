@extends('master')

@section('section')
    <h1 class="text-light ms-5"><b>Dosen</b></h1>
    <section>
        <div class="serv text-light">
            <ul>
                @foreach ($dosen as $item)
                    <li class="">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img class="gbrDosen " src="{{ asset('asset/img/Dosen/' . $item->gambar) }}"
                                    alt="{{ $item->gambar }}">
                            </div>

                            <br>
                            <p class="text-center ">{{ $item->nama }}</p>
                        </div>
                        <br><br>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
