<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_student',
        'id_cost'
    ];

    public function student(){
        return $this->belongsTo('App\Alumno', 'id_student');
    }
    public function cost(){
        return $this->belongsTo('App\Pago', 'id_cost');
    }
}
