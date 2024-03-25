@extends('master')

@section('section')
    <br>
    <h1 class="text-dark container"><b>Daftar Mahasiswa Informatika Institut Teknologi Del</b></h1>
    <br>

    <div class="row">
       <div class="col-4 py-5 px-5">
        <form action="{{ route('filter.mahasiswa') }}" method="GET">
            @csrf
            <div class="row">
                <label for="searchby" class="py-2">Pilih Kategori</label>
                <div class="col-4">
                    <select name="searchby" id="searchby" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="dependent('searchby', 'searchvalue')">
                        <option value="">Semua</option>
                        <option value="angkatan">Angkatan</option>
                        <option value="status">Status</option>
                    </select>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-8">
                            <select name="searchvalue" id="searchvalue" class="form-select form-select-sm" aria-label=".form-select-sm example"></select>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary">Terapkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
       </div>
    </div>

    <div class="py-5 mx-5" style="border-radius:20px; background-color:rgba(171, 196, 255, 0.65);">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        {{-- @if ($item['prodi_name'] == 'S1 Informatika') --}}
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->status }}</td>
                        {{-- @endif --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        function dependent(e1,e2){
            var s1 = document.getElementById(e1);
            var s2 = document.getElementById(e2);
            var optionarr = [];

            s2.innerHTML = "";

            if(s1.value == 'angkatan'){
                // var optionarr = ['2014|2014', '2015|2015', '2016|2016', '2017|2017', '2018|2018', '2019|2019', '2020|2020', '2021|2021'];
                var optionarr = [
                    @if (@isset($angkatan) & sizeof($angkatan) > 0)
                        @foreach ($angkatan as $akt)
                            '{{ $akt->angkatan }}|{{ $akt->angkatan }}',
                        @endforeach
                    @endif
                ];
            }
            else if (s1.value == 'status'){
                // var optionarr = ['Aktif|Aktif', 'Mengundurkan Diri|Mengundurkan Diri', 'Lulus|Lulus',];
                var optionarr = [
                    @if (@isset($status) & sizeof($status) > 0)
                        @foreach ($status as $sts)
                            @if ($sts->status != "Tidak Aktif")
                                '{{ $sts->status }}|{{ $sts->status }}',
                            @endif
                        @endforeach
                    @endif
                ];
            }

            for(var option in optionarr){
                var pair = optionarr[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                s2.options.add(newoption);
            }
        }
    </script>
@endsection
