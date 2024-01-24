@extends('master')

@section('section')
    <section>
        <img src="{{ asset('asset/img/sejarah.jpg') }}" alt="wisudawan" class="w-100"><br>
        <div class="d-flex justify-content-center p-3  ">
            <h1><b>SEJARAH</b></h1>
        </div>
        <div class="mx-5">
            <br>
            <div class="bg-light p-3 rounded-4" style="font-size: 20px; text-align: justify;">
                <b>{!! $sejarah->sejarah !!}</b>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
