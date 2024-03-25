@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Edit Mahasiswa {{$mahasiswa->nama}}</h1>
    <form action="/admin/editMahasiswa_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="text" class="form-control" name="id" value="{{$mahasiswa->id}}" hidden>

        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" value="{{$mahasiswa->nim}}">

        <br><br>

        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">

        <br><br>

        <label class="form-label">Angkatan</label>
        <select name="angkatan" id="angkatan">
            <option value="">--- Pilih Angkatan ---</option>
            <option value="2014"{{$mahasiswa->angkatan == '2014' ? 'selected' : ''}}>2014</option>
            <option value="2015"{{$mahasiswa->angkatan == '2015' ? 'selected' : ''}}>2015</option>
            <option value="2016"{{$mahasiswa->angkatan == '2016' ? 'selected' : ''}}>2016</option>
            <option value="2017"{{$mahasiswa->angkatan == '2017' ? 'selected' : ''}}>2017</option>
            <option value="2018"{{$mahasiswa->angkatan == '2018' ? 'selected' : ''}}>2018</option>
            <option value="2019"{{$mahasiswa->angkatan == '2019' ? 'selected' : ''}}>2019</option>
            <option value="2020"{{$mahasiswa->angkatan == '2020' ? 'selected' : ''}}>2020</option>
            <option value="2021"{{$mahasiswa->angkatan == '2021' ? 'selected' : ''}}>2021</option>
            <option value="2022"{{$mahasiswa->angkatan == '2022' ? 'selected' : ''}}>2022</option>
            <option value="2023"{{$mahasiswa->angkatan == '2023' ? 'selected' : ''}}>2023</option>
            <option value="2024"{{$mahasiswa->angkatan == '2024' ? 'selected' : ''}}>2024</option>
            <option value="2025"{{$mahasiswa->angkatan == '2025' ? 'selected' : ''}}>2025</option>
            <option value="2026"{{$mahasiswa->angkatan == '2026' ? 'selected' : ''}}>2026</option>
        </select>

        <br><br>

        <label class="form-label">Status</label>
        <select name="status" id="status">
            <option value="">--- Pilih Status ---</option>
            <option value="Aktif" {{$mahasiswa->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
            <option value="Tidak Aktif" {{$mahasiswa->status == 'Tidak Aktif' ? 'selected' : ''}}>Tidak Aktif</option>
            <option value="Lulus" {{$mahasiswa->status == 'Lulus' ? 'selected' : ''}}>Lulus</option>
            <option value="Mengundurkan Diri" {{$mahasiswa->status == 'Mengundurkan Diri' ? 'selected' : ''}}>Mengundurkan Diri</option>
        </select>

        <br>
        <input type="submit" value="Edit Data Mahasiswa" class="btn btn-primary">
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
