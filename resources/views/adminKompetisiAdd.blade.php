@extends('adminMenu')


@section('section')

    <div class="container">

        <h1>Tambah Kompetisi</h1>
        <form action="/admin/addKompetisi_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">

            <br><br>

            <label class="form-label">Batas Pendaftaran</label>
            <input type="date" class="form-control" name="tanggal" >

            <br><br>
            
            <label class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara">

            <br><br>

            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3"></textarea>

            <br><br>

            <label class="form-label">Link Lebih Lanjut</label>
            <input type="text" class="form-control" name="links">

            <br><br>
            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div>
            <br>
            <br>

            <input type="submit" value="Tambah Kompetisi" class="btn btn-primary">
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
