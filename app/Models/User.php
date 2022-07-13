
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'email',
        'nim',
        'password',
        'roles_id',
        'prodis_id',
        'kelompok',
        'instagram'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function roles()
    {
        return $this->belongsTo(Role::class, 'roles_id');
    }

    public function prodis()
    {
        return $this->belongsTo(Prodi::class, 'prodis_id');
    }
}


