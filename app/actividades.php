<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    protected $fillable = [
        'convenio_id','descripcion','titulo','cantidad_asistentes'
    ];
}
