@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Edit Organisasi</h1>
    <form action="/admin/editOrganisasi_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" value="{{$organisasi->id}}" hidden>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$organisasi->nama}}">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Anggota</label><br/>
            <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
            @if($organisasi->gambar)
                <img id="preview" class="gbrOrganisasi w-50 mt-2" src="{{ asset('asset/img/Organisasi/' . $organisasi->gambar) }}" alt="{{ $organisasi->gambar }}" style="display: block;">
            @else
                <img id="preview" class="gbrOrganisasi w-50 mt-2" src="" alt="Preview" style="display: none;">
            @endif
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$organisasi->jabatan}}">
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <select class="form-control" id="divisi" name="divisi">
                <option value="Pembina" @if($organisasi->divisi == 'Pembina') selected @endif>BPH</option>
                <option value="BPH" @if($organisasi->divisi == 'BPH') selected @endif>BPH</option>
                <option value="Danus" @if($organisasi->divisi == 'Danus') selected @endif>Danus</option>
                <option value="Humas" @if($organisasi->divisi == 'Humas') selected @endif>Humas</option>
                <option value="Kominfo" @if($organisasi->divisi == 'Kominfo') selected @endif>Kominfo</option>
                <option value="Minat" @if($organisasi->divisi == 'Minat') selected @endif>Minat</option>
                <option value="Pendidikan" @if($organisasi->divisi == 'Pendidikan') selected @endif>Pendidikan</option>
                <option value="Ristek" @if($organisasi->divisi == 'Ristek') selected @endif>Ristek</option>
            </select>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Edit Data Anggota</button>
    </form>

    <br>

    {{-- Menampilkan error validasi --}}
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

<script>
    function previewImage() {
        var preview = document.getElementById('preview');
        var fileInput = document.getElementById('gambar');
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>
@endsection
