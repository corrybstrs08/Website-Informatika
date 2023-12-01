<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <title>Informatika</title>
  <style>
    body {
      min-width: 920px;
    }

    .dropcolor {
      background-color: #767676;
    }

    .dropdown.dropdown-center {
      display: inline-block;
      width: 180px;
    }

    .dropdown-menu.dropdown-menu-center {
      text-align: center;
      width: 180px;
    }

    footer {
      bottom: 0;
      width: 100%;
    }

    /* slideshiot */

    /* endslidehost */

    /* Modif Corry */
    /* Ganti warna teks saat kursor diarahkan */
    .dosen-name:hover {
      color: blue;
      /* Ganti dengan warna yang diinginkan */
    }

    /* Tambahkan garis bawah saat kursor diarahkan */
    .card-link:hover .dosen-name {
      text-decoration: underline;
      /* Menambahkan garis bawah */
    }

    .gbrDosen {
      border-radius: 50%;
      width: 25%;
    }

    .serv ul {
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      justify-content: center;
    }

    .serv ul li {
      list-style: none;
      flex: 0 0 33.333333%;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .martop {
      margin-top: 20px;
      background-size: contain;
    }

    .beff {
      margin: 20px;
      background-color: aliceblue;
    }

    .afft {
      margin: 20px;
    }

    * {
      font-family: 'Nunito';
    }

    .ele {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .lingkar {
      border-radius: 50%;
      height: 10em;
      width: 10em;
      position: relative;
      border: 7px solid rgba(0, 121, 194, 1);
    }

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

    /* .biru:hover{
              color: blue
          } */

    .mainmenubtn {

      cursor: pointer;
    }

    .mainmenubtn:hover {
      background-color: grey;
    }

    .dropdown-child {
      display: none;
      position: absolute;
      background-color: rgba(90, 94, 123, 0.67);
      border-radius: 3%;
    }

    .dropdown-child a {
      color: white;
      padding: 20px;
      text-decoration: none;
      display: block;
      border-radius: 3%;
    }

    .dropdown-child a:hover {
      background-color: rgba(90, 94, 123, 1);
      border-radius: 3%;
      z-index: 100000000000;
    }


    .dropdown:hover .dropdown-child {
      display: block;
    }

    .text-body {
      color: #266bb1 !important;
    }

<<<<<<< HEAD
      .horizontal {
        width: 339px;
        margin: 0 auto; /* Membuat elemen berada di tengah */
        border: 2px solid; /* Mengatur border dengan ketebalan 2px */
        color: rgba(0, 121, 194, 1); /* Mengatur warna border menjadi dark blue */
      }

      .hr-vertical {
        width: 2px; /* Sesuaikan lebar vertikal sesuai kebutuhan */
        height: 80%; /* Sesuaikan tinggi vertikal sesuai kebutuhan */
        border: 2px solid rgba(0, 121, 194, 1); /* Mengatur border dengan ketebalan 2px dan warna dark blue */
        margin: 0; /* Hapus margin agar lebih tepat di tengah */
        transform: rotate(180deg);
      }


      /* pagination in eventAll */

      /* croptting */
    </style>
=======
    /* pagination in eventAll */

    /* croptting */
  </style>
>>>>>>> f58b5aa29a5d9b9c1bee251e1d15b74d5e4d32d1
</head>

<body>
  <header style="background-color: #0079C2;">
    <div class="container-fluid py-3 px-4">
      <div class="row align-items-center">

        <!-- Logo di bagian kiri -->
        <div class="col-sm-8">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
            <img src="{{ asset('asset/img/logo_del.png') }}" alt="Logo" class="logo rounded me-4" width="75em">
            <span>
              <span class="ms-1 text-light" style="font-size: 36px; font-family: Nunito">Institut Teknologi Del</span>
              <br>
              <span class="ms-1 text-light" style="font-size: 20px; font-family: Nunito">MarTuhan, MarRoha, Marbisuk</span>
            </span>
          </a>
        </div>

        <!-- Navbar di bagian kanan -->
        <div class="col-sm-4 d-flex justify-content-end flex-column">
          <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid d-flex justify-content-end">

              <!-- Tombol burger untuk menu mobile -->
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Daftar menu navbar -->
              <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav mr-auto gap-3 justify-content-end ">
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/" style="font-size: 16px; font-family: Nunito;">Beranda</a>
                  </li>

                  <!-- TENTANG KITA -->

                  <li class="nav-item">
                    <div class="dropdown show">
                      <a class="nav-link dropdown-toggle text-light" href="#" style="font-size: 16px; font-family: Nunito" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-bs-target="#dropdownMenu">Tentang Kita</a>
                      <ul class="dropdown-menu dropdown-menu-center dropcolor" aria-labelledby="dropdownMenuLink" id="dropdownMenu" style="width: fit-content;">
                        <li><a class="dropdown-item text-light" href="/visiMisi" style="font-size: 16px; font-family: Nunito;">Visi Misi</a></li>
                        <hr>
                        <li><a class="dropdown-item text-light" href="/sejarah" style="font-size: 16px; font-family: Nunito;">Sejarah</a></li>
                      </ul>
                    </div>
                  </li>

                  <!-- KURIKULUM -->

                  <li class="nav-item">
                    <a class="nav-link text-light" href="/kurikulum" style="font-size: 16px; font-family: Nunito">Kurikulum</a>
                  </li>

                  <!-- AKADEMIK -->

                  <li class="nav-item">
                    <div class="dropdown show">
                      <a class="nav-link dropdown-toggle text-light" href="#" style="font-size: 16px; font-family: Nunito" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-bs-target="#dropdownMenu">Akademik</a>
                      <ul class="dropdown-menu dropdown-menu-center dropcolor" aria-labelledby="dropdownMenuLink" id="dropdownMenu" style="width: fit-content;">
                        <li><a class="dropdown-item text-light" href="/organisasi" style="font-size: 16px; font-family: Nunito;">Himasti</a></li>
                        <hr>
                        <li><a class="dropdown-item text-light" href="/staffDosen" style="font-size: 16px; font-family: Nunito">Dosen</a></li>
                        <hr>
                        <li><a class="dropdown-item text-light" href="/mahasiswa" style="font-size: 16px; font-family: Nunito">Mahasiswa</a></li>
                      </ul>
                    </div>
                  </li>

                  <!-- KONTAK -->

                  <li class="nav-item">
                    <a class="nav-link text-light" href="/kontak" style="font-size: 16px; font-family: Nunito">Kontak</a>
                  </li>

                  <!-- LOGIN ADMIN -->

                  <li class="nav-item" style="margin-left: 10px;">
                    <a href="/admin" class="btn btn-primary" style="font-size: 16px; width: 150px; font-family: Nunito; background-color: #09306B">Login Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- KOLOM PENCARIAN -->

          <div class="row  d-flex justify-content-end">
            <div class="col col-6 " style="width: 300px;">
              {{ csrf_field() }}
              <input type="text" class="form-control" placeholder="Pencarian.." style="background-color: aliceblue;" name="cari" onclick="clearInput(this)">
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>


  <!-- SECTION -->
  @yield('section')
  <!-- END SECTION -->


  <br>
  <footer>
    <div class="container-fluid" style="background-color: #0079C2;">
      <div class="row">
        <div class="col-12 col-md-6 px-3 py-3 text-light" style="font-family: Nunito;">

          <!-- KONTAK KAMI -->

          <h1 class="text-light px-3" style="font-weight: 700; text-decoration: underline">Kontak Kami</h1>
          <br>
          <div class="container-fluid">
            <span>Institut Teknologi Del</span>
            <br>
            <span>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara, Indonesia</span>
            <br>
            <p>Kode Pos : 22381</p>
            <p>
              <i class="ri-phone-line"></i>
              <span>+62 632 331234</span>
              <br>
              <i class="ri-mail-line"></i>
              <i>Informatika@del.ac.id</i>
            </p>
          </div>
        </div>

        <!-- TAUTAN -->

        <div class="col-12 col-md-6 px-3 py-3 text-light" style="font-family: Nunito;">
          <h1 class="text-light" style="font-weight: 700; text-decoration: underline">Tautan</h1>
          <a href="https://www.del.ac.id/"><img src="{{ asset('asset/img/logo_del.png') }}" alt="del" target="_blank" width="100em" height="100em" class="rounded mx-2"></a>
          <a href="https://spmb.del.ac.id/"><img src="{{ asset('asset/img/spmb.png') }}" alt="spmb" target="_blank" width="130em" height="100em" class="rounded mx-2"></a>
        </div>
      </div>
    </div>

    <!-- TANDA COPYRIGHT -->

    <div class="container-fluid d-flex justify-content-center" style="background-color: #fff; font-family: Nunito; margin-bottom: -10px;">
      <p class="justify-items-center" style="color: #19246F; font-weight: 700"> &copy; 2023 Program Studi S1 INFORMATIKA - IT Del</p>
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".afft",
        prevEl: ".beff",
      },
    });

    function clearInput(input) {
      input.value = '';
    }

    const slidesContainer = document.getElementById("slides-container");
    const slide = document.querySelector(".slide");
    const prevButton = document.getElementById("slide-arrow-prev");
    const nextButton = document.getElementById("slide-arrow-next");
    nextButton.addEventListener("click", () => {
      const slideWidth = slide.clientWidth;
      slidesContainer.scrollLeft += slideWidth;
    });
    prevButton.addEventListener("click", () => {
      const slideWidth = slide.clientWidth;
      slidesContainer.scrollLeft -= slideWidth;
    });

    // Select all slides
    const slides = document.querySelectorAll(".slide");

    // loop through slides and set each slides translateX property to index * 100%
    slides.forEach((slide, indx) => {
      slide.style.transform = `translateX(${indx * 100}%)`;
    });
  </script>
</body>

</html>