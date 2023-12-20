@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Tambah Events</h1>
    <form action="/admin/addEvents_proses" method="post">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" hidden>

        <label class="form-label">Judul Event</label>
        <input type="text" class="form-control" name="nama">

        <br><br>

        <label class="form-label">Waktu Mulai</label>
        <input type="date" class="form-control" name="waktu_mulai">

        <br><br>

        <label class="form-label">Waktu Selesai</label>
        <input type="date" class="form-control" name="waktu_selesai">

        <br><br>

        <label class="form-label">Deskripsi Singkat</label>
        <input type="text" class="form-control" name="deskripsi_singkat">

        <br><br>

        <label class="form-label">Jenis</label>
        <input type="text" class="form-control" name="jenis">

        <br><br>

        <label class="form-label">Lokasi</label>
        <input type="text" class="form-control" name="lokasi">

        <br><br>

        <label class="form-label">Penyelenggara</label>
        <input type="text" class="form-control" name="penyelenggara">

        <br><br>

        <label class="form-label">Kontak</label>
        <input type="text" class="form-control" name="kontak">

        <br><br>

        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">

        <br><br>

        <label class="form-label">Penjelasan</label>
        <input type="text" class="form-control" name="penjelasan">

        <br><br>

        <input type="submit" value="Tambah Events" class="btn btn-primary">
    </form>

    <br>
</div>

@endsection