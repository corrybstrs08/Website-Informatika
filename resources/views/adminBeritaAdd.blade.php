@extends('adminMenu')

@section('section')

    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Tambah Berita</h1>
        <form action="/addBerita_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label class="form-label">Judul Berita</label>
            <input type="text" class="form-control" name="judul">

            <br><br>

            <label class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">

            <br><br>

            <label class="form-label">Isi</label>

            <textarea class="form-control" id="exampleFormControlTextarea1" name="isi" rows="3"></textarea>

            <br><br>

            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div>

            <br>

            <input type="submit" value="Tambah Berita" class="btn btn-primary">
        </form>

        <br>


    </div>

@endsection
