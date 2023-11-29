@extends('adminMenu')


@section('section')

    <div>
        <h1>Kompetisi</h1>
        <a href="/admin/addKompetisi"><button type="button" class="btn btn-success">Tambah Kompetisi</button></a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Batas Pendaftaran</th>
                    <th scope="col">Penyelenggara</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Link Lebih Lanjut</th>
                    <th scope="col">Operasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kompetisi as  $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1}}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->penyelenggara }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->link}}</td>
                        <td class="d-flex">
                            <a href="/admin/editKompetisi/{{ $item->id }}"><button type="button"
                                    class="btn btn-primary mx-1">Edit</button></a>
    
                            <a href="/admin/hapusKompetisi/{{ $item->id }}"><button type="button"
                                    class="btn btn-danger mx-1">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection