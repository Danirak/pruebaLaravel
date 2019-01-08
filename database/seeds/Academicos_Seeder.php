<?php

use Illuminate\Database\Seeder;

class Academicos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\academicos::class,6)->create();
    }
}
