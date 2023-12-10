@extends('master')

@section('section')
<head>
    <!-- ... -->
    <link rel="stylesheet" href="path/to/your/custom.css">
    <style>
    .carousel-control-prev, .carousel-control-next {
        color: #007bff; /* Warna biru gelap, sesuaikan dengan preferensi Anda */
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: #007bff; /* Warna biru gelap untuk latar belakang panah */
    }

    .carousel-control-prev:hover, .carousel-control-next:hover {
        color: #0056b3; /* Warna biru yang lebih gelap saat hover, sesuaikan dengan preferensi Anda */
    }

    .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
        background-color: #0056b3; /* Warna biru yang lebih gelap untuk latar belakang panah saat hover */
    }
    .mx-6 {
        margin-left: 15rem !important;
        margin-right: 0rem !important;
    }
    .carousel-item {
        text-align: left; /* Mengatur teks di tengah */
        margin-left: 20px; /* Menambahkan jarak di antara setiap semester */
    }

    .carousel-item > div {
        margin: 0 15px; /* Menambahkan ruang di antara setiap mata kuliah */
    }

</style>

</head>

<section class="text-body">
    <h1 class="text-body text-center" style="font-size: 3em;"><b>Struktur Kurikulum <br> Program Studi Informatika</b></h1>
    <div class="container mt-5">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4 m-2">
                    <label for="tahun">Tahun Kurikulum</label>
                    <select id="tahun" class="form-control">
                        <option selected>Pilih Tahun</option>
                        <option>2001</option>
                        <option>2004</option>
                        <option>2007</option>
                        <option>2010</option>
                        <option>2012</option>
                        <option>2014</option>
                        <option>2016</option>
                        <option>2019</option>
                        <option>2023</option>
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

    <div id="semesterCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 1; $i <= 8; $i+=2)
                <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                    <div class="mx-6 mt-7 text-left"> <!-- Tambahkan class text-center di sini -->
                        <div class="row">
                            @for ($j = $i; $j <= $i + 1; $j++)
                                <div class="col-5">
                                    <h2>Semester {{ $j }}</h2>
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
                                                @if ($k->semester == $j)
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
                            @endfor
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#semesterCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#semesterCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
