<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'email',
        'especialidad',
        'localizacion',

    ];

    public function sanitarian()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
