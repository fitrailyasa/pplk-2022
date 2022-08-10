<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disiplin extends Model
{
    use HasFactory;
    protected $table='Disiplin';
    protected $fillable=['user_id','nim','kelompok','status'];
}
