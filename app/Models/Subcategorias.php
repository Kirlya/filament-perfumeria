<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('subcategorias')]
#[Fillable('nombre','activo','categoria_id')]
class Subcategorias extends Model
{
    protected $fillable = [
        'nombre',
        'activo',
        'categoria_id'
    ];
}
