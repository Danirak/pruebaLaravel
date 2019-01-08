<?php

use Faker\Generator as Faker;

$factory->define(\App\organizaciones::class, function (Faker $faker) {
    return [
        'rut'=>$faker->unique()->text(10),
        'nombre'=>$faker->unique()->text(10),
        'responsable'=>$faker->text(10)
    ];
});
