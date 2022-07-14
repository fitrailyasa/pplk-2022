<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawas';
    protected $fillable = [
        'id', 'namaLengkap', 'namaSingkat', 'kategoris_id','visi','misi','deskripsi'
    ];

}
