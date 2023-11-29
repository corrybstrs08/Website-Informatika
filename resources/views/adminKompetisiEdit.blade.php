@extends('adminMenu')


@section('section')

    <div class="container">

        <h1>Edit Kompetisi</h1>
        <form action="/admin/editKompetisi/proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="text" class="form-control" name="id" value="{{ $kompetisi->id }}" hidden>

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $kompetisi->nama }}">

            <br><br>

            <label class="form-label">Tangal Kegiatan</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $kompetisi->tanggal }}">

            <br><br>

            <label class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" value="{{ $kompetisi->penyelenggara }}">

            <br><br>

            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3">{{ $kompetisi->keterangan }}</textarea>

            <br><br>

            <label class="form-label">Link Lebih Lanjut</label>
            <input type="text" class="form-control" name="links" value="{{ $kompetisi->link }}">

            <br><br>

            <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $kompetisi->gambar) }}"
                    alt="{{ $kompetisi->gambar }}" style="width: 100%">
            </div>

            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div><br>
            <br>

            <input type="submit" value="Edit Kompetisi" class="btn btn-primary">
        </form>

        <br>
        {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection
