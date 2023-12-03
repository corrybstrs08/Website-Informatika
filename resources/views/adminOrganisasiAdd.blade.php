@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Tambah Organisasi</h1>
    <form action="/addOrganisasi_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="form-label mb-3">Nama</label>
        <input type="text" class="form-control mb-3" name="nama">

        <div class="form-group mb-3">
            <b>Foto Profil</b><br/>
            <input type="file" name="gambar">
        </div>

        <label class="form-label mb-3">Jabatan</label>
        <input type="text" class="form-control mb-3" name="jabatan">

        <input type="submit" value="Tambah Anggota" class="btn btn-primary">
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