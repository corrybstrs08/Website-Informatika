@extends('adminMenu')

@section('section')


<br>
<a href="/admin/addEvents"><button type="button" class="btn btn-success">Tambah Events</button></a>
<br><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">waktu</th>
                <th scope="col">operasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $index => $item)
                <tr>
                    <th scope="row">{{  $index + 1}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->waktu_mulai}}</td>
                    <td class="d-flex align-items-center">
                        <a href="/admin/editEvents/{{$item->id}}"><button type="button" class="btn btn-primary mx-1">Edit</button></a>
                        
                        <a href="/admin/hapusEvent/{{$item->id}}"><button type="button" class="btn btn-danger mx-1">Hapus</button></a>
                        
                        <a href="/event/{{$item->id}}"><button type="button" class="btn btn-success mx-1" target="_blank">Lihat Artikel Pratinjau</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
