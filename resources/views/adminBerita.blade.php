@extends('adminMenu')

@section('section')

<br>
<a href="/admin/addBerita"><button type="button" class="btn btn-success">Tambah Berita</button></a>
<br><br>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">operasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($berita as $index => $item)
            <tr>
                <th scope="row">{{$index + 1}}</th>
                <td>{{$item->judul}}</td>
                <td>{{$item->deskripsi}}</td>
                <td class="d-flex align-items-center">
                    <a href="/admin/editBerita/{{$item->id}}"><button type="button" class="btn btn-primary mx-1">Edit</button></a>
                    
                    <a href="/admin/hapusBerita/{{$item->id}}"><button type="button" class="btn btn-danger mx-1">Hapus</button></a>
                    
                    <a href="/berita/{{$item->id}}" target="_blank"><button type="button" class="btn btn-success mx-1">Lihat Pratinjau</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection