<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenTebakBangunan extends Model
{
    use HasFactory;
    protected $table='token_tebak_bangunans';
    protected $fillable=['user_id','token','kelompok'];
}
