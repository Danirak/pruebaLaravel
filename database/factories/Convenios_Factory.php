<?php

use Faker\Generator as Faker;

$factory->define(\App\convenios::class, function (Faker $faker) {
    $organizaciones =\App\organizaciones::pluck('rut')->toArray();
    $tipo =\App\tipo_convenios::count();

    return [
        'nombre'=>$faker->text(10),
        'fecha_inicio'=>$faker->dateTime($max='now'),
        'duracion'=>$faker->numberBetween(1,12),
        'organizacion_rut'=>$faker->randomElement($organizaciones),
        'tipo_convenio_id'=>$faker->numberBetween(1,$tipo)
    ];
});
