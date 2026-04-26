<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table(name: 'cp', key: 'codigo_postal', increment: false, keyType: 'string')]
#[Fillable('ciudad_id','provincia_id','codigo_postal')]
class CodigoPostal extends Model
{
    protected $fillable = [
        'ciudad_id',
        'provincia_id',
        'codigo_postal'
    ];
}
