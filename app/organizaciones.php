<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organizaciones extends Model
{
    protected $fillable = [
        'rut', 'nombre', 'responsable',
    ];

}
