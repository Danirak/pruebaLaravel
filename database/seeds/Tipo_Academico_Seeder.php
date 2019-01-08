<?php

use Illuminate\Database\Seeder;

class Tipo_Academico_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\tipo_academicos::class,7)->create();
    }
}
