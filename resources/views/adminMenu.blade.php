<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>Admin Menu</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 " style="position: fixed">
                    <a href="/admin" class="d-flex align-items-center pb-3  text-white text-decoration-none">
                        <span class="fs-5  d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item menus">
                            <a href="/admin/showEvent" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Event</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/berita" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Berita</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/mahasiswa" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/dosen" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dosen</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/kompetisi" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kompetisi</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/kurikulum" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kurikulum</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/visiMisi" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Profil</span>
                            </a>
                        </li>
                        <li class="nav-item menus">
                            <a href="/admin/organisasi" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Organisasi</span>
                            </a>
                        </li>

                    </ul>
                    <hr>
                    <div>
                        <button class="btn btn-primary" onclick="location.href='{{ route('home') }}'">
                            Beranda
                        </button>
                    </div>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-account-circle-fill"></i>
                            <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            {{-- <li>
                                <x-dropdown-link class="dropdown-item" :href="route('profile.edit')">
                                {{ __('Profile') }}
                                </x-dropdown-link>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li> --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                    {{-- <a class="dropdown-item" method="POST" href="route('logout')">Sign out</a> --}}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                @yield('section')
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    @yield('scripts')
</body>

</html>
