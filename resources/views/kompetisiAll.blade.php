@extends('master')

@section('section')
<div class="text-light">
    <div class="p-2 ">
        <h1 class="ms-5"><strong>Kompetisi</strong></h1>
        <br>

        <ul style="list-style: none;">
            @foreach ($kompetisi as $item)
            <div class="p-2" style="border-radius: 25px; background-color: rgb(160, 170, 206);">
                <li>
                    <div class="border border-light pt-1 px-2 rounded-4" style="background-color:rgba(245, 245, 220, 0.144)">
                        <h3><a href="/kompetisi/{{ $item->id }}">{{ $item->nama }}</a></h3>
                        <p>Oleh : {{ $item->penyelenggara }}</p>
                        <p>Batas Pendaftaran : {{ $item->tanggal }}</p>
                    </div>
                </li>
            </div>
            <br>
            @endforeach

        </ul>
        <div style="width: 50%; /* or any other width */
            margin: auto;">
            <br>
            {{ $kompetisi->links('custom') }}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">