@extends('master')

@section('section')
<section>
    <h1 class=" ms-4 text-start">
        <label class="text-primary"><b>Program Studi</b></label>
        <label class="text-white"><b>Sarjana</b></label><br>
        <label class="text-white "><b>Informatika</b></label>
    </h1>


    <div style="z-index: 9;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('asset/img/pemandangan_1.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/pemandangan_2.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/pemandangan_3.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <h1 class="text-body text-center"><strong>Program Studi <font style="color:rgba(0, 121, 194, 1);">Informatika
            </font></strong></h1>
    <p class="text-body container text-center mb-5">Informatika merupakan salah satu core technology dalam
        sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication
        Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat
        lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan
        Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya
        pencerdasan kehidupan bangsa</p>
    <div>
        <div class="row text-body ">
            <div class="col-sm-8">
                <div class="p-2 container" style="background-color: rgba(156, 173, 206, 0.47) ;">
                    <a href="/eventsAll">
                        <h1 class=""><strong>| EVENTS</strong></h1>
                    </a>
                    <br>
                    @foreach ($events as $event)
                    <div class="m-2">
                        <div class="d-flex">
                            <div id="tanggal" class="d-flex justify-content-center ">
                                <p class="text-center w-100 p-2 m-2 d-flex justify-content-center align-items-center" style="background-color: rgb(0, 121, 194);">
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
                            <div>

                                <a href="/event/{{ $event->id }}">
                                    <h2>{{ $event->nama }}</h2>
                                </a>
                                <p>{{ $event->deskripsi_singkat }}</p>
                            </div>
                        </div>
                        <hr class="w-75">
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-4">
                <h1><a href="/kompetisiAll"><b>| Kompetisi</b></a></h1>
                <br><br>
                <ul style=" list-style-type: none;  padding: 0;
                    margin: 0;">
                    @foreach ($kompetisi as $item)
                    <li>
                        <div class=" pt-1 px-2 rounded-4">
                            <h3><a href="/kompetisi/{{ $item->id }}">{{ $item->nama }}</a></h3>
                            <p ">Batas Pendaftaran : {{ $item->tanggal }}</p>
                                </div>
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class=" text-body p-5" id="berita">
                            <h1><a href="/beritaAll"><b>| Berita Terkini</b></a></h1>
                            <hr>
                            <div class=" d-flex text-dark">
                                <p class=" d-flex align-items-center"><i class="beff ri-arrow-left-s-line"></i></p>

                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper ">
                                        @foreach ($berita as $item)
                                        <div class="swiper-slide">
                                            <div class="bg-light" style="border-radius:10px">
                                                <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="border-radius:9px 9px 0px 0;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="/berita/{{ $item->id }}">
                                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                                    </a>
                                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination martop"></div>
                                </div>
                                <p class=" d-flex align-items-center"><i class="beff ri-arrow-right-s-line"></i></p>
                            </div>

                        </div>

                        <br>
                        <div class="d-flex justify-content-around text-body text-center mb-2 ">
                            <div class="lingkar">
                                <a href="/mahasiswa">
                                    <div class="ele">
                                        <i class="ri-user-fill"></i>
                                        <p><b>Mahasiswa Aktif</b></p>
                                        <h2><b>{{ $jumlahAktif }}</b></h2>
                                    </div>
                                </a>
                            </div>
                            <div class="lingkar">
                                <a href="/mahasiswaAlumni">
                                    <div class="ele">
                                        <i class="ri-group-fill"></i>
                                        <h4><b>Alumni</b></h4>
                                        <h2><b>{{ $jumlahAlumni }}</b></h2>
                                    </div>
                                </a>
                            </div>
                            <div class="lingkar">
                                <a href="/staffDosen">
                                    <div class="ele">
                                        <b>
                                            <i class="ri-pages-line"></i>
                                            <p><b>Dosen</b></p>
                                            <h2><b>{{ $dosen }}</b></h2>
                                        </b>
                                    </div>
                                </a>
                            </div>
                        </div>
</section>

<br><br>

<div class="container text-body">
    <h1 class="text-center"><b><u>Link Terkait</u></b></h1><br><br>
    <ul class="d-flex justify-content-center">
        {{-- <div>
            <div style="width: 50%; /* or any other width */
                margin: auto;">
                <a href="https://www.del.ac.id/" target="none"><img src="{{ asset('asset/img/logo_del.png') }}" alt="logo del " width="100em" style="border-radius: 10%;"></a>
            </div>
            <br>

        </div> --}}

        {{-- <div>
            <div class="d-flex justify-content-center">
                <div class="">
                    <a href="https://spmb.del.ac.id/
                        " target="none">
                        <h1>
                            <b>SPMB </b> <br>
                            IT Del
                        </h1>
                    </a>
                </div>
            </div>
        </div> --}}

        {{-- <div>
            <span class="d-flex">
                <a href="https://cis.del.ac.id/user/login" target="none">
                    <a href="https://cis.del.ac.id/user/login" target="none">
                        <h1 class="me-1" style="font-size: 6em">CIS</h1>
                    </a>
                    <div class="cis-text"><br>
                        <a href="https://cis.del.ac.id/user/login" target="none">INSTITUT <br>TEKNOLOGI DEL</a>
                    </div>
                </a>
            </span>
        </div>
        <div>
            <div>

                <a href="https://ecourse.del.ac.id/my/" target="none"><img
                            src=" {{ asset('asset/img/ecourse.png') }}" alt="logo del " width="100em" style="border-radius: 5%;width: 20em;"></a>
            </div>

        </div> --}}
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
@endsection
