@extends('master')

@section('section')
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="">
                
            </div>
        </div>
    </div>
    <div class="ms-4 mb-3">
        <h1 class="text-body" style="font-size: 4em;">
            <b>
                Struktur Organisasi HIMASTI<br>
                Program Studi Informatika
            </b>
        </h1>
    </div>
    

    <div class="container d-flex justify-content-center mb-5">
        <img src="{{ asset('asset/img/' . $organisasi->organisasi)}}" alt="logo Del" class="w-75">
    </div>
@endsection
