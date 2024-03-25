@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Tambah Mahasiswa</h1>
    <form action="/addMahasiswa_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim">

        <br><br>

        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">

        <br><br>

        <label class="form-label">Angkatan</label>
        <select name="angkatan" id="angkatan">
            <option value="">--- Pilih Angkatan ---</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2023">2024</option>
            <option value="2023">2025</option>
            <option value="2023">2026</option>
        </select>

        <br><br>

        <label class="form-label">Status</label>
        <select name="status" id="status">
            <option value="">--- Pilih Status ---</option>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
            <option value="Lulus">Lulus</option>
            <option value="Mengundurkan Diri">Mengundurkan Diri</option>
        </select>


        <br>

        <input type="submit" value="Tambah Mahasiswa" class="btn btn-primary">
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
