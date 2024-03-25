@extends('adminMenu')

@section('section')
<br>
<a href="/admin/addDosen"><button type="button" class="btn btn-success">Tambah Dosen</button></a>
<br><br>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Gambar</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col">Operasi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($dosen as $index =>$item)
        <tr>
            <th scope="row">{{ $index + 1}}</th>
            <td>{{ $item->nama }}</td>
            <td><img src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}" height="50em"></td>
            <td>{!! $item->deskripsi !!}</td>
            <td>{{ $item->status }}</td>
            <td class="d-flex">
                <a href="/admin/editDosen/{{ $item->id }}"><button type="button" class="btn btn-primary mx-1">Edit</button></a>

                <a href="/admin/hapusDosen/{{ $item->id }}"><button type="button" class="btn btn-danger mx-1">Hapus</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="/staffDosen" target="_blank"><button type="button" class="btn btn-success mx-1">Lihat
        Pratinjau</button></a>
@endsection
