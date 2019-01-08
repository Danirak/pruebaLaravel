<?php

use Faker\Generator as Faker;

$factory->define(\App\tipo_academicos::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->unique()->text(10)
    ];
});
