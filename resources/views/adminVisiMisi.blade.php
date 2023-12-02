@extends('adminMenu')

@section('section')
    <div>
        <h3>Visi</h3>
        <p class="border border-dark p-2 rounded-3">{{ $visi[0]->visi }}</p>
        <a href="/admin/editVisi"><button type="button" class="btn btn-primary text-white">Ubah Visi</button></a>
    </div>
    <br>
    <br>
    <div id="misi">
        <div class="d-flex">
            <h2 class="me-4">Misi</h2>

            <a href="/admin/addMisi"><button type="button" class="btn btn-success">Tambah Misi</button></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Misi</th>
                    <th scope="col">Operasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($misi as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->misi }}</td>
                        <td>
                            <a href="/admin/editMisi/{{ $item->id }}"><button type="button"
                                    class="btn btn-primary mx-1">Edit</button></a>

                            <a href="/admin/hapusMisi/{{ $item->id }}"><button type="button"
                                    class="btn btn-danger mx-1">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <h3>Sejarah</h3>
        <div class="border border-dark p-2 rounded-3">{!! $sejarah->sejarah !!}</div>
        <a href="/admin/editSejarah"><button type="button" class="btn btn-primary text-white mt-3">Ubah Sejarah</button></a>
    </div>
@endsection
