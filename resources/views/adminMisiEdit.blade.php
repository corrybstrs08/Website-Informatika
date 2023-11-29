@extends('adminMenu')

@section('section')

<div>
    <form action="/admin/editMisi/proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="id" value="{{$misi->id}}" hidden>

        <label class="form-label">Misi</label>
        <textarea class="form-control" name="misi" rows="3" >{{$misi->misi}}</textarea>
        <br>
        <input type="submit" value="Ubah Misi" class="btn btn-primary">
    </form>
</div>

@endsection()