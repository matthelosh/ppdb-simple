@extends('welcome')

@section('content')

@if(count($siswas) < 1)
    <div class="container">
        <h1 clas="text-center">Maaf! Tidak ada Calon Siswa yang memiliki nama <em>"{{ $nama_dicari }}"</em>. Silahkan daftarkan di laman <a href="{{ route('daftar.index') }}" class="btn btn-danger btn-lg">Daftar</a></h1>
    </div>
@else
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-dark">Data Calon Siswa</h3>
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ibu</th>
                            <th>No. HP</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswas as $siswa)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $siswa->nik }}</td>
                                <td>{{ $siswa->nisn ?? 'null' }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->jk }}</td>
                                <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</td>
                                <td>{{ $siswa->agama }}</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                                <td>{{ $siswa->nama_ibu }}</td>
                                <td>{{ $siswa->hp }}</td>
                                <td>{{ $siswa->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
      
@endif


@endsection