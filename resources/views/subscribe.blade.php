@extends('master')

@section('section')

<br><br><br><br>

<div class="py-5 container" style="border-radius:20px; background-color:rgba(171, 196, 255, 0.65);">
    
    @foreach ($data as $item)
        @if ($item['prodi_name'] == "S1 Informatika")
        <p>{{ $item['nama']}}</p>    
        @endif        
    @endforeach
    <h1>Thank You!</h1>
    <br>
    <h3>We will follow up shortly with additional information. 
        In the meantime, please feel free to: </h3>

        <br>
    <button style="background-color: rgba(1, 73, 124, 0.7);color:white;border-style:none;padding:5px; border-radius:10px">Continue Browsing Our Website</button>
    
</div>

@endsection