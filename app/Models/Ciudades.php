<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('ciudades')]
#[Fillable('nombre')]
class Ciudades extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'nombre'
    ];
}
