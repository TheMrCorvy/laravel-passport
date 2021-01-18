<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'lastname',
        'email',
        'state',
        'peruvian',
        'assistance',
        'phone',
        'id_company',
    ];

    public function company () {
        return $this->belongsTo('App\Empresa', 'id_company');
    }
}
