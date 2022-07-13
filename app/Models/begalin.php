<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class begalin extends Model
{
    use HasFactory;
    protected $table = 'begalin';
    protected $fillable = ['isi'];
    
}
