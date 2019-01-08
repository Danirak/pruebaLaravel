<?php

use Illuminate\Database\Seeder;

class Actividades_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\actividades::class,6)->create();
    }
}
