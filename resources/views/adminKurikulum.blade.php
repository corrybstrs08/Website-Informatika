@extends('adminMenu')

@section('section')
<br>
<a href="/admin/addKurikulum"><button type="button" class="btn btn-success">Tambah MK</button></a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">Semester</th>
            <th scope="col">SKS</th>
            <th scope="col">Tahun Kurikulum</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($kurikulum as $k)
        <tr>
            <td>{{ $k->kode }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->semester }}</td>
            <td>{{ $k->sks }}</td>
            <td>{{ $k->tahun }}</td>

            <td>
                <a href="/admin/editkurikulum/{{ $k->id }}"><button type="button" class="btn btn-primary mx-1">Edit</button></a>

                <a href="/admin/hapuskurikulum/{{ $k->id }}"><button type="button" class="btn btn-danger mx-1">Hapus</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/kurikulum" target="_blank"><button type="button" class="btn btn-success mx-1">Lihat
        Pratinjau</button></a>
@endsection