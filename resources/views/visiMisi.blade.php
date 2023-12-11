@extends('master')

@section('section')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <h1 class="p-5 rounded-5"
                    style="background: rgb(133, 128, 218);
                    background: linear-gradient(90deg, rgba(133, 128, 218, 1) 0%, rgba(85, 85, 201, 0.6895133053221288) 10%, rgba(0, 212, 255, 1) 100%);">
                    <b>VISI MISI</b>
                </h1>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset class="border border-primary rounded-3 p-4 "
                                style="border-color:blue;">
                                <legend class="float-none w-auto p-3"
                                    style="background: rgb(0,212,255);
                                background: linear-gradient(0deg, rgba(0,212,255,0) 0%, rgba(31,51,185,0.92) 90%);">
                                    VISI</legend>
                                <p><b>{{ $visi[0]->visi }}</b></p>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <fieldset class="border border-primary rounded-3 p-4">
                                <legend class="float-none w-auto p-3"
                                    style="background: rgb(0,212,255);
                                background: linear-gradient(0deg, rgba(0,212,255,0) 0%, rgba(31,51,185,0.92) 90%);">
                                    MISI</legend>
                                <ol>
                                    @foreach ($misi as $item)
                                    <b>
                                        <li>
                                            {{ $item->misi }}
                                        </li>
                                    </b>
                                    @endforeach
                                </ol>
                            </fieldset>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"crossorigin="anonymous"></script>
@endsection
