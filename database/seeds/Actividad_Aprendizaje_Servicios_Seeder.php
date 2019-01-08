<?php

use Illuminate\Database\Seeder;

class Actividad_Aprendizaje_Servicios_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\actividad_aprendizaje_servicios::class,6)->create();
    }
}
