<?php

use Faker\Generator as Faker;

$factory->define(\App\actividad_aprendizaje_servicios::class, function (Faker $faker) {
    $activity_id =\App\actividades::count();
    $academic_rut =\App\academicos::pluck('rut')->toArray();
    return [
        'asignatura'=>$faker->text(10),
        'cantidad_estudiantes'=>$faker->numberBetween(1,50),
        'anio'=>$faker->year($max='now'),
        'semestre'=>$faker->numberBetween(1,2),
        'actividad_id'=>$faker->numberBetween(1,$activity_id),
        'academico_rut'=>$faker->randomElement($academic_rut)
    ];
});
