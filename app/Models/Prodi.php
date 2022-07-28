<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';
    protected $fillable = [
        'namaLengkap','namaSingkat','visi','misi','deskripsi','kepalaProdi', 'akreditasi', 'tahunBerdiri', 'ruangProdi', 'jumlahMahasiswa', 'logo','prestasi', 'jurusan_id'
    ];

}
