<?php

use Faker\Generator as Faker;

$factory->define(\App\academicos::class, function (Faker $faker) {
    $tipo =\App\tipo_academicos::count();
    return [
        'rut'=>$faker->unique()->text(10),
        'nombre'=>$faker->text(10),
        'tipo_academico_id'=>$faker->numberBetween(1,$tipo)
    ];
});
