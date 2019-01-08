<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad_aprendizaje_servicios extends Model
{
    protected $fillable = [
        'asignatura','cantidad_estudiantes','anio','semestre','actividad_id','academico_rut'
    ];
}
