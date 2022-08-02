<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode_game extends Model
{
    use HasFactory;
    protected $table = 'kode_games';
    protected $fillable = ['no','nama','kode','nilai'];
}
