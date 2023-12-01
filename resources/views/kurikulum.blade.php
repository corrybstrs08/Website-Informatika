@extends('master')

@section('section')
    <section class="text-body">
        <h1 class="text-body text-center" style="font-size: 3em;"><b>
                Struktur Kurikulum <br> Program Studi Informatika</b></h1>
        <div class="container mt-5">
            <form>
            <div class="form-row">
                <div class="form-group col-md-4 m-2">
                    <label for="tahun">Tahun Kurikulum</label>
                    <select id="tahun" class="form-control">
                        <option selected>Pilih Tahun</option>
                        <option>2023</option>
                        <option>2024</option>
                        <!-- Tambahkan tahun lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div class="form-group col-md-4 mt-2 mb-4">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Cari</button>
                </div>
            </div>
            </form>
        </div>
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
