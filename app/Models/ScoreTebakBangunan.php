<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreTebakBangunan extends Model
{
    use HasFactory;
    protected $table='score_tebak_bangunans';
    protected $fillable=['user_id','score','kelompok','kesempatan'];
}
