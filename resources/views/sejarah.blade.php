@extends('master')

@section('section')
    <section>
        <img src="{{ asset('asset/img/sejarah.jpg') }}" alt="wisudawan" class="w-100"><br>
        <div class="d-flex justify-content-center p-3  ">
            <h1><b>SEJARAH</b></h1>
        </div>
        <div class="mx-5">
            <br>
            <div class="bg-light p-3 rounded-4" style="font-size: 1.5rem; text-align: justify;">
                <b>{{ $sejarah->sejarah }}</b>
            </div>
        </div>
    </section>
@endsection
