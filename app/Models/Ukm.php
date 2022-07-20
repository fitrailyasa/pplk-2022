<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $table = 'ukms';
    protected $fillable = ['namaLengkap','namaSingkat','visi','misi','pembina','ketuaUmum','tahunBerdiri','logo','filosofiLogo','qrCode','deskripsi','dokumentasi1','dokumentasi2','dokumentasi3'];

}
