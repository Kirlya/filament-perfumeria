<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('atributos')]
#[Fillable('nombre','activo')]
class Atributos extends Model
{
    protected $table = 'atributos';

    protected $fillable = [
        'nombre',
        'activo'
    ];
}
