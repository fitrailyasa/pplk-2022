<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_score extends Model
{
    use HasFactory;
    protected $table = 'table_scores';
    protected $fillable = ['token','userid','score','kelompok'];


}
