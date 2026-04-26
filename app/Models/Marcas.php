<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('marcas')]
#[Fillable('nombre','activo')]
class Marcas extends Model
{
    protected $fillable = [
        'nombre',
        'activo'
    ];
}
