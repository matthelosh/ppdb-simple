@extends('welcome')

@section('content')

@if(count($siswas) < 1)
    <div class="container">
        <h1 clas="text-center">Maaf! Tidak ada Calon Siswa yang memiliki nama <em>"{{ $nama_dicari }}"</em>. Silahkan daftarkan di laman <a href="{{ route('daftar.index') }}" class="btn btn-danger btn-lg">Daftar</a></h1>
    </div>
@else
    {{-- <div class="col-sm-12"> --}}
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">{{ $siswas->count() }} anak</h1>
            </div>
        </div>
        <hr>
        @foreach ($siswas as $siswa)
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title text-uppercase">{{ $siswa->nama }}</h4>
                            <p style="line-height: 1em;">
                                NIK: {{ $siswa->nik }}, <br>
                                TTL: {{ $siswa->tempat_lahir }}, {{ date('d M Y', strtotime($siswa->tanggal_lahir)) }}
                            </p>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" class="stretched-link">
                                <img src="{{ asset('img/siswa-'.$siswa->jk.'.png') }}" alt="Siswa" style="height:50px;">
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        @endforeach
    {{-- </div> --}}
    
                         
  
      
@endif


@endsection