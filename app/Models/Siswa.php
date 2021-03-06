<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn', 'nik', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'desa', 'kec', 'kab', 'kewarganegaraan', 'nama_ibu', 'hp', 'email','asal_sekolah'
    ];
}
