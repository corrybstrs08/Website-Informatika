@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Edit Organisasi</h1>
    <form action="/admin/editOrganisasi_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" value="{{$organisasi->id}}" hidden>

        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$organisasi->nama}}">

        <br><br>

        <div class="form-group">
            <b>Gambar Anggota</b><br/>
            <input type="file" name="gambar">
            
        </div><img class="gbrOrganisasi w-50" src="{{ asset('asset/img/Organisasi' . $organisasi->gambar) }}"
                                            alt="{{ $organisasi->gambar }}">

        <br>

        <br>
        <label class="form-label mb-3">Jabatan</label>
        <input type="text" class="form-control mb-3" name="jabatan" value="{{$organisasi->jabatan}}">

        

        <br>
        <input type="submit" value="Edit Data Anggota" class="btn btn-primary">
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