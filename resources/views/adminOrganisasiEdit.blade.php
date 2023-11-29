@extends('adminMenu')

@section('section')

    <div class="container">

        <h1>Edit Struktur Organisasi</h1>
        <form action="/admin/editOrganisasi/proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
           

            <div class="container m-3"><img src="{{ asset('asset/img/' . $organisasi->organisasi) }}"
                    alt="{{ $organisasi->organisasi }}" style="width: 100%">
            </div>

            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div>

            <br>

            <input type="submit" value="Edit Struktur Organisasi" class="btn btn-primary">
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
