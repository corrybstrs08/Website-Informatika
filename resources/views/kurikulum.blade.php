@extends('master')

@section('section')
    <section class="text-body">
        <h1 class="text-body" style="font-size: 4em;margin-left: 2em; margin-bottom: 2em;"><b>
                Struktur <br> Kurikulum Program Studi <br> Informatika</b></h1>
        @for ($i = 1; $i <= 8; $i++)
            <div class="mx-5 mt-3">
                <div class="row">
                    <div class="col-5">
                        <h2>Semester {{ $i }}</h5>
                        <table class="table text-body table-borderless">
                            <thead>
                                <tr class="border-bottom border-light">

                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Mata Kuliah</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kurikulum as $k)
                                    @if ($k->semester == $i)
                                        <tr>
                                            <td>{{ $k->kode }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->semester }}</td>
                                            <td>{{ $k->sks }}</td>

                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-5">
                        <p hidden>{{ $i++ }}</p>
                        <h2>Semester {{ $i }}</h5>
                        <table class="table text-body table-borderless">
                            <thead>
                                <tr class="border-bottom border-light">

                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Mata Kuliah</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kurikulum as $k)
                                    @if ($k->semester == $i)
                                        <tr>
                                            <td>{{ $k->kode }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->semester }}</td>
                                            <td>{{ $k->sks }}</td>

                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endfor
    </section>
@endsection
