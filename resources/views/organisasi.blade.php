@extends('master')

@section('section')
    <h1 class="serv text-body text-center mt-3"><b>Struktur Keanggotaan 2023/2024</b></h1>
    <section>
    <div class="mt-5 mb-5">
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Pembina</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Pembina') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
        <hr/>
        <h2 class="serv text-body text-center"><b>Badan Pengurus Harian</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'BPH') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr/>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Riset dan Teknologi</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Ristek') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr/>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Pendidikan</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Pendidikan') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Komunikasi dan Informasi</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Kominfo') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Minat dan Bakat</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Minat') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr/>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Dana dan Usaha</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Danus') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr/>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Hubungan Masyarakat</b></h2>
        <div class="serv text-body">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                @foreach ($organisasi->where('divisi', 'Humas') as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                        <p class="text-center card-text">{{ $item->nama }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr/>
        </div>
</div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
