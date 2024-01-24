@extends('master')

@section('section')
    <div class="text-light">
        <div class="p-2 ">
            <h1 class=""><strong>EVENTS</strong></h1>
            @foreach ($events as $event)
                <div class="m-2 p-2 " style="background-color: rgb(156, 173, 206) ;border-radius: 25px;">
                    <div class="d-flex mt-2">
                        <div id="tanggal" class="d-flex justify-content-center">
                            <p class="text-center w-100 p-2 m-2" style="background-color: rgb(0, 121, 194);">
                                {{ substr($event->waktu_mulai, 8, 2) }}
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
                            <a href="/event/{{ $event->id }}"><h2>{{ $event->nama }}</h2></a>
                            <p>{{ $event->deskripsi_singkat }}</p>
                        </div>
                    </div>
                    <hr class="w-75">
                </div>
            @endforeach


            <div style="width: 50%; /* or any other width */
            margin: auto;">

                <br>
                {{ $events->links('custom') }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
@endsection
