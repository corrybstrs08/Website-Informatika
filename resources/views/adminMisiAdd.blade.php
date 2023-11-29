@extends('adminMenu')

@section('section')

<div>
    <form action="/admin/addMisi/proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="form-label">Misi</label>
        <textarea class="form-control" name="misi" rows="3" ></textarea>
        <br>
        <input type="submit" value="Tambah Misi" class="btn btn-primary">
    </form>
</div>

@endsection()