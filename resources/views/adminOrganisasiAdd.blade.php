@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Tambah Organisasi</h1>
    
    <form action="/addOrganisasi_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Foto Profil</label>
            <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
            <img id="preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none;">
        </div>

        <div class="form-group">
            <label for="divisi">Divisi:</label>
            <select class="form-control" id="divisi" name="divisi">
                <option value="Pembina">Pembina</option>
                <option value="BPH">BPH</option>
                <option value="Danus">Danus</option>
                <option value="Humas">Humas</option>
                <option value="Kominfo">Kominfo</option>
                <option value="Minat">Minat</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Ristek">Ristek</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan">
        </div>

        <button type="submit" class="btn btn-primary">Tambah Anggota</button>
    </form>

    {{-- Menampilkan error validasi --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger mt-3">
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
