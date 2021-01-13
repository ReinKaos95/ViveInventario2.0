<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
   protected $fillable = [
        'eq_modelo', 'eq_marca', 'eq_serial', 'eq_tequid', 'eq_nbiennacional' ,'eq_estatus', 'departamentos_dep_id',
    ];
}
