<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    use HasFactory;

    protected $table ='himpunans';
    protected $fillabel=['kodeWarna', 'pembina', 'ketuaHimpunan', 'tahunBerdiri', 'logo', 'filosofiLogo', 'ormawas_id'];


}
