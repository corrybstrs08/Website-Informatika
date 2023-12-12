@extends('adminMenu')

@section('section')

<br>
    <a href="/admin/addOrganisasi"><button type="button" class="btn btn-success">Tambah Anggota</button></a>
    <br><br>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Divisi</th>
                <th scope="col">Operasi</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($organisasi as $index =>$item)
                <tr>
                    <th scope="row">{{ $index + 1}}</th>
                    <td>{{ $item->nama }}</td>
                    <td><img src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}" alt="{{ $item->gambar }}" height="50em"></td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->divisi }}</td>
                    <td class="d-flex">
                        <a href="/admin/editOrganisasi/{{ $item->id }}"><button type="button"
                                class="btn btn-primary mx-1">Edit</button></a>

                        <a href="/admin/hapusOrganisasi/{{ $item->id }}"><button type="button"
                                class="btn btn-danger mx-1">Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/organisasi"><button type="button" class="btn btn-success mx-1">Lihat
        Pratinjau Tampilan</button></a>

@endsection