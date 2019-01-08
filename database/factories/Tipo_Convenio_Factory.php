<?php

use Faker\Generator as Faker;

$factory->define(\App\tipo_convenios::class, function (Faker $faker) {
    return [
        'tipo_convenios_id'=>$faker->unique()->numberBetween(1,100),
        'nombre'=>$faker->text(30)
    ];
});
