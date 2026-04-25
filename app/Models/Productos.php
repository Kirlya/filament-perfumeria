<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('productos')]
#[Fillable('codigo','nombre','descripcion','precio','activo','imagen','marca_id','subcategoria_id')]
class Productos extends Model
{
    //
}
