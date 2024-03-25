@extends('master')

@section('section')
<h1 class="serv text-body"><b>Dosen</b></h1>
<section>
    <div class="serv text-body">
        <ul class="list-unstyled d-flex flex-wrap justify-content-around">
            @foreach ($dosen as $item)
            @if ($item->status != "Tidak Aktif")
            <a href="/staffDosen/{{ $item->id }}" class="card-link">
                <div class="card m-2" style="width: 18rem; height: 10rem;">
                    <div class="text-center mt-3">
                        <img class="gbrDosen img-fluid" src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                        <p class="text-center dosen-name mt-3"><strong>{{ $item->nama }}</strong></p>
                    </div>
                </div>
            </a>
            @endif
            @endforeach
        </ul>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

@endsection
