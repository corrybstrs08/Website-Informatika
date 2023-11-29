@extends('master')

@section('section')
    <br>
    <h1 class="text-white container"><b>Daftar Alumni Informatika IT Del</b></h1>
    <br>
    
    <div class="py-5 mx-5" style="border-radius:20px; background-color:rgba(171, 196, 255, 0.65);">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        @if ($item['prodi_name'] == 'S1 Informatika')
                            <td>{{ $item['nim'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['angkatan'] }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
