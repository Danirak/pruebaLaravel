<?php

use Illuminate\Database\Seeder;

class Convenios_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\convenios::class,5)->create();
    }
}
