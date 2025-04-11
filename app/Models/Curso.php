<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
    ];
}
