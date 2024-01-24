@extends('adminMenu')

@section('section')

<h3>Sejarah</h3>

<form action="/admin/editSejarah/proses" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <label class="form-label">Sejarah</label>
    <textarea class="form-control" name="sejarah" rows="3" id="text-area">{{$sejarah->sejarah}}</textarea>
    <br>
    <input type="submit" value="Ubah Sejarah" class="btn btn-primary">
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

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#text-area' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection