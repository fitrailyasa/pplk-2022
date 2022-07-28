<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Presensi extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'hari',
        'status',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function roles()
    {

    }
}
