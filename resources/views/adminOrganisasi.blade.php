@extends('adminMenu')

@section('section')

<h1><b>Struktur Organisasi HIMASTI</b></h1>
<br><br>

<div class="container d-flex justify-content-center mb-5">
    <img src="{{ asset('asset/img/' . $organisasi->organisasi)}}" alt="logo Del" class="w-75">
</div>

<a href="/admin/editOrganisasi/"><button type="button" class="btn btn-success">Edit Struktur Organisasi</button></a>

@endsection