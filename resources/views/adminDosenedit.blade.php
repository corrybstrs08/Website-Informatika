@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Edit Dosen</h1>
    <form action="/admin/editDosen_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" value="{{$dosen->id}}" hidden>

        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$dosen->nama}}">

        <br><br>

        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="3" id="text-area">
        {{ $dosen->deskripsi }}
        </textarea>

        <br><br>

        <div class="form-group">
            <b>Gambar Dosen</b><br />
            <input type="file" name="file">
        </div>

        <br><br>

        <label class="form-label">Status</label>
        <select name="status" id="status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>

        <br>

        <img class="gbrDosen w-50" src="{{ asset('asset/img/Dosen/' . $dosen->gambar) }}" alt="{{ $dosen->gambar }}">

        <br>

        <br>
        <input type="submit" value="Edit Data Dosen" class="btn btn-primary">
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

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#text-area'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
