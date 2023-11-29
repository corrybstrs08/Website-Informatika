@extends('adminMenu')

@section('section')

<h3>Visi</h3>

<form action="/admin/editVisi/proses" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <label class="form-label">Visi</label>
    <textarea class="form-control" name="visi" rows="3" >{{$visi->visi}}</textarea>
    <br>
    <input type="submit" value="Ubah Visi" class="btn btn-primary">
</form>


<br>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection