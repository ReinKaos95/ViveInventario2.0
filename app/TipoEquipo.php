<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    protected $fillable = [
        'teq_nombre', 'teq_descripcion'
    ];
}
