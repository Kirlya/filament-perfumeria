<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('lotes')]
#[Fillable('cantidad','fecha_ingreso','vencimiento','modelo_id')]
class Lotes extends Model
{
    protected $fillable = [
        'cantidad',
        'fecha_ingreso',
        'vencimiento',
        'modelo_id'
    ];
}
