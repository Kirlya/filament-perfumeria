<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


#[Table('categorias')]
#[Fillable('nombre','activo')]
class Categorias extends Model
{

}
