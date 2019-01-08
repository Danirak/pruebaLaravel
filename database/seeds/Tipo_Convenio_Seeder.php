<?php

use Illuminate\Database\Seeder;

class Tipo_Convenio_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\tipo_convenios::class,3)->create();
    }
}
