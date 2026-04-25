<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('modelos')]
#[Fillable('nombre','activo','valor','atributo_id','producto_id')]
class Modelos extends Model
{
    
}
