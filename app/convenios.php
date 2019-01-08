<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convenios extends Model
{
    protected $fillable = [
        'nombre','fecha_inicio','duracion','organizacion_rut','tipo_convenio_id'
    ];
}
