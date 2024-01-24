@extends('adminMenu')


@section('section')

    <div class="container">

        <h1>Edit Kurikulum</h1>
        <form action="/admin/editkurikulum/proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="text" class="form-control" name="id" value="{{$kurikulum->id}}" hidden>

            <label class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode" value="{{$kurikulum->kode}}" >

            <br><br>

            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" class="form-control" name="nama" value="{{$kurikulum->nama}}" >

            <br><br>

            <label class="form-label">Semester</label>
            <input type="text" class="form-control" name="semester" value="{{$kurikulum->semester}}" >

            <br><br>

            <label class="form-label">SKS</label>
            <input type="text" class="form-control" name="sks" value="{{$kurikulum->sks}}">

            <br><br>

            <label class="form-label">Tahun Kurikulum</label>
            <input type="text" class="form-control" name="tahun">

            <br><br>

            <br>

            <input type="submit" value="Edit Mata Kuliah" class="btn btn-primary">
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
