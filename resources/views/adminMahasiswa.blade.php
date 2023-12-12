@extends('adminMenu')

@section('section')
    <br>
    <a href="/admin/addMahasiswa"><button type="button" class="btn btn-success">Tambah Mahasiswa</button></a>
    <br><br>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Status</th>
                <th scope="col">Operasi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswa as $index =>$item)
                <tr>
                    <th scope="row">{{ $index + 1}}</th>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->status }}</td>

                    <td class="d-flex">
                        <a href="/admin/editMahasiswa/{{ $item->id }}"><button type="button"
                                class="btn btn-primary mx-1">Edit</button></a>

                        <a href="/admin/hapusMahasiswa/{{ $item->id }}"><button type="button"
                                class="btn btn-danger mx-1">Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/Mahasiswa" target="_blank"><button type="button" class="btn btn-success mx-1">Lihat Pratinjau</button></a>
@endsection
