<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table(name:'cp',key: "codigo_postal", incrementing: false, type: 'string')]
#[Fillable('nombre','provincia_id','ciudad_id')]
class Cps extends Model
{
    protected $table = 'cp';

    protected $primaryKey = 'codigo_postal';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nombre',
        'provincia_id',
        'ciudad_id'
    ];
}
