<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class academicos extends Model
{
    protected $fillable = [
        'rut','nombre','tipo_academico_id'
    ];
}
