<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $fillable = [
        'nombre',
        'inicio_curso',
        'final_curso'
    ];
}
