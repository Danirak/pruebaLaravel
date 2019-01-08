<?php

use Faker\Generator as Faker;

$factory->define(\App\actividades::class, function (Faker $faker) {
    $id =\App\convenios::count();
    return [
        'convenio_id'=>$faker->numberBetween(1,$id),
        'descripcion'=>$faker->text(20),
        'titulo'=>$faker->text(10),
        'cantidad_asistentes'=>$faker->numberBetween(1,50)
    ];
});
