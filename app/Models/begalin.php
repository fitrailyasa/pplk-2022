<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Begalin extends Model
{
    use HasFactory;
    protected $table = 'begalins';
    protected $fillable = ['isi'];
    
}
