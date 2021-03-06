@extends('welcome')

@section('content')
    <div class="form-pendaftaran">
        <h2 class="text-center"><small>Formulir Pendaftaran Peserta Didik Baru </small><br>SD Negeri 1 Bedalisodo</h2>
        <form action="{{ route('daftar.store') }}" method="POST">
            @csrf()
            <div class="form-group">
                <label for="nik">Nomor Induk Kependudukan</label>
                <input type="text" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}">
                @error('nik')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nisn">Nomor Induk Siswa Nasional [NISN]</label>
                <input type="text" name="nisn" class="form-control" placeholder="Nomor Induk Siswa Nasional [NISN]" value="{{ old('nisn') }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                @error('nama')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" value="{{ old('asal_sekolah') }}">
                @error('asal_sekolah')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                    <option value="" @if (old('jk') == null) {{ 'selected' }} @endif>Jenis Kelamin</option>
                    <option value="l" @if (old('jk') == 'l') {{ 'selected' }} @endif>Laki-laki</option>
                    <option value="p" @if (old('jk') == 'p') {{ 'selected' }} @endif>Perempuan</option>
                </select>
                @error('jk')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text"  name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}" required>
                @error('tanggal_lahisr')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control">
                    <option value="" @if (old('agama') == null) {{ 'selected' }} @endif>Agama</option>
                    <option value="Islam" @if (old('agama') == 'Islam') {{ 'selected' }} @endif>Islam</option>
                    <option value="Protestan" @if (old('agama') == 'Protestan') {{ 'selected' }} @endif>Protestan</option>
                    <option value="Katolik" @if (old('agama') == 'Katolik') {{ 'selected' }} @endif>Katolik</option>
                    <option value="Hindu" @if (old('agama') == 'Hindu') {{ 'selected' }} @endif>Hindu</option>
                    <option value="Buddha" @if (old('agama') == 'Buddha') {{ 'selected' }} @endif>Buddha</option>
                    <option value="Konghuchu" @if (old('agama') == 'Konghuchu') {{ 'selected' }} @endif>Konghuchu</option>
                </select>
                @error('agama')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="2" class="form-control" placeholder="Jl. RT/RW Dusun">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="desa">Tanggal Lahir</label>
                <input type="text" name="desa" class="form-control" placeholder="Desa" value="{{ old('desa') }}">
                @error('desa')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kec">Kecamatan</label>
                <input type="text" name="kec" class="form-control" placeholder="Kecamatan" value="{{ old('kec') }}">
                @error('kec')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kab">Kabupaten</label>
                <input type="text" name="kab" class="form-control" placeholder="Kabupaten" value="{{ old('kab') }}">
                @error('kab')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu Kandung</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu Kandung" value="{{ old('nama_ibu') }}">
                @error('nama_ibu')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="hp">No. HP</label>
                <input type="text" name="hp" class="form-control" placeholder="No. HP" value="{{ old('hp') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-submit" type="submit">Daftar</button>
            </div>
        </form>
    </div>
@endsection