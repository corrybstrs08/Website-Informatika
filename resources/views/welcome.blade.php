<!DOCTYPE html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        a {
            color: inherit;
            text-decoration: none;
        }
        
        .trigger:hover+.keTrig {
            visibility: visible;
        }
        
        .keTrig {
            padding: 3%;
            background-color: rgba(90, 94, 123, 0.95);
            list-style: none;
            color: white;
            position: absolute;
            visibility: hidden;
        }
        
        .cards-wrapper {
            display: flex;
        }
        
        .card {
            margin: 0.5em;
            width: calc(100%/3);
        }
        
        .image-wrapper {
            height: 10vw;
            margin: 0 auto;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }
        
        .image-wrapper img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>

    <title>Infomratika IT Del</title>
</head>

<body style="background-color: rgba(25, 36, 111, 1);margin: 0; padding: 0;">
    <header>
        <div class="d-flex justify-content-between text-light" style="background-color: rgba(25, 36, 111, 1);">
            <div>
                <img src="" alt="logo del disini">
            </div>
            <div>
                <div class=" align-middle" style="display: flex;">
                    <p class="p-2">Beranda</p>

                    <nav class="tentangKita mt-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="" class=" trigger">Tentang Kita</a>
                        </div>
                        <ul class="keTrig">
                            <li><a href="">Visi Misi</a></li>
                            <li><a href="">Sejarah</a></li>
                            <li><a href="">Staff dan Dosen</a></li>
                        </ul>
                    </nav>

                    <p class="p-2">Organisasi</p>
                    <p class="p-2">Experience</p>
                    <p class="p-2">Publikasi</p>
                    <p class="p-2">Kurikulum</p>
                    <div class="p-2">
                        <button type="button" class="btn btn-primary">Primary</button>
                    </div>
                </div>
                <div class="d-flex pe-5 p-1 justify-content-end">
                    <input type="text" value="Pencarian..." style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </header>

    <section>
        <h1 class=" me-4 text-end">
            <label class="text-primary">Program Studi</label>
            <label class="text-white">Sarjana</label><br>
            <label class="text-white ">Informatika</label>
        </h1>
        <h1 class="text-light text-center">Program Studi Informatika</h1>
        <p class="text-light container text-center" style="
        ">Informatika merupakan salah satu core technology dalam sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat
            lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya pencerdasan kehidupan bangsa</p>

        <div>
            <div class="row text-light">
                <div class="col-sm-8    ">
                    <div class="p-2" style="background-color: rgba(156, 173, 206, 0.47) ;">
                        <div class="m-2">
                            <h2>Struktur Kurikulum</h2>
                            <p>Pola dan susunan mata kuliah yang harus ditempuh oleh peserta didik.</p>
                            <hr class="w-75">
                        </div>
                        <div class="m-2">
                            <h2>Profil Lulusan</h2>
                            <p>Peran lulusan di bidang keahlian atau kerja setelah menyelesaikan studinya.</p>
                            <hr class="w-75">
                        </div>
                        <div class="m-2">
                            <h2>Capaian Pembelajaran</h2>
                            <p>Kompetensi pembelajaran yang harus dicapai Mahasiswa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h1>|EVENTS</h1>
                    <div id="events" class="row">
                        <div class="col-4 ">
                            <div id="tanggal" class="d-flex justify-content-center pt-3">
                                <p class="text-center w-50" style="background-color: rgb(0, 121, 194);">07 <br>OCT</p>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <h5>Garuda ACademic of Excellence (ACE)</h5>
                        </div>
                        <div class="col-4 ">
                            <div id="tanggal" class="d-flex justify-content-center pt-3">
                                <p class="text-center w-50" style="background-color: rgb(0, 121, 194);">14 <br>OCT</p>
                            </div>
                        </div>
                        <div class="col-8 ">
                            <h5>Graduation</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-light p-5" id="berita">
            <h1>Updates and Newsroom</h1>
            <hr>

            <div id="carouselExampleControls" class="text-dark carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="margin-right: 10em;">
                    <div class="carousel-item active">
                        <div class="cards-wrapper" style="display: flex;">
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper" style="display: flex;">
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper" style="display: flex;">
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                        </div>
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

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Show All</button>
            </div>
        </div>

        <div class="d-flex pb-5 justify-content-center text-light">
            <div id="CTA" class="w-50 p-4" style="text-align: center;background-color: rgba(156, 173, 206, 0.47);">
                <h2 ">Bergabung Bersama Kami</h2>
                <p>Informasi Pendaftaran</p>
                <div class=" justify-content-center d-flex ">
                    <button type="button " class="btn btn-primary ">Klik Lebih Lanjut</button>
            </div>
        </div>
        </div>

        <div class="d-flex justify-content-around text-light text-center mb-2 ">
            <div>
                <p>Mahasiswa Aktif</p>
                <p>1020</p>
            </div>
            <div>
                <p>Staff dan Dosen</p>
                <p>1020</p>
            </div>
            <div>
                <p>Publikasi</p>
                <p>1020</p>
            </div>
        </div>
    </section>



    <div class="bawah ">
        <div class=" pt-3 container-fluid text-light " name="footer "
            style="background-color: rgba(0, 121, 194, 0.7);margin: 0; padding: 0; ">
            <div class="row ">
                <div class="col-sm ">
                    <img src=" " alt="logo Del "><br>
                    <label for=" ">Institut Teknologi Del</label><br>
                    <label for=" ">Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir Sumatera Utara - Indonesia
                        22381</label>
                    <br><br><br>
                    <label for=" ">+62822988XXXXX</label><br>
                    <label for=" "><i>Informatika@del.ac.id</i></label>
                </div>
                <div class="col-sm ">
                    <p>Enter your email address to subscribe to this blog and receive notifications of new posts by
                        email.</p>
                    <p>Email Address</p>
                    <hr  style="size: 10; width: 80%; ">
                    
                    <div class="containter d-flex justify-content-end ">
                        <button type="button " class="mt-3 btn btn-primary ">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <p class="m-0 p-0 bg-dark text-light ">© 2022 Program Studi S1 INFORMATIKA - IT Del</p>
    </div>

</body>

</html>