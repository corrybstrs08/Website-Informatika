@extends('adminMenu')

@section('section')

    <div class="container">

        <h1>Edit Berita</h1>
        <form action="/admin/editBerita/proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="id" value="{{ $berita->id }}" hidden>

            <label class="form-label">Judul Berita</label>
            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">

            <br><br>

            <label class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $berita->deskripsi }}">

            <br><br>

            <label class="form-label">Isi</label>
            <input type="text" class="form-control" name="isi" value="{{ $berita->isi }}">

            <br><br>

            <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $berita->gambar) }}"
                    alt="{{ $berita->gambar }}" style="width: 100%">
            </div>

            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div>

            <br>

            <input type="submit" value="Edit Berita" class="btn btn-primary">
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
