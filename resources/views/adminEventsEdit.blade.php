@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Edit Events</h1>
    <form action="/admin/editEvents/proses" method="post">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" value="{{$events->id}}" hidden>

        <label class="form-label">Judul Event</label>
        <input type="text" class="form-control" name="nama" value="{{$events->nama}}">

        <br><br>

        <label class="form-label">Waktu Mulai</label>
        <input type="date" class="form-control" name="waktu_mulai" value="{{$events->waktu_mulai}}">

        <br><br>

        <label class="form-label">Waktu Selesai</label>
        <input type="date" class="form-control" name="waktu_selesai" value="{{$events->waktu_selesai}}">

        <br><br>

        <label class="form-label">Deskripsi Singkat</label>
        <input type="text" class="form-control" name="deskripsi_singkat" value="{{$events->deskripsi_singkat}}">

        <br><br>

        <label class="form-label">Jenis</label>
        <input type="text" class="form-control" name="jenis" value="{{$events->jenis}}">

        <br><br>

        <label class="form-label">Lokasi</label>
        <input type="text" class="form-control" name="lokasi" value="{{$events->lokasi}}">

        <br><br>

        <label class="form-label">Penyelenggara</label>
        <input type="text" class="form-control" name="penyelenggara" value="{{$events->penyelenggara}}">

        <br><br>

        <label class="form-label">Kontak</label>
        <input type="text" class="form-control" name="kontak" value="{{$events->kontak}}">

        <br><br>

        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" value="{{$events->deskripsi}}">

        <br><br>

        <label class="form-label">Penjelasan</label>
        <input type="text" class="form-control" name="penjelasan" value="{{$events->penjelasan}}">

        <br><br>

        <input type="submit" value="Edit Events" class="btn btn-primary">
    </form>

    <br>
</div>

@endsection