<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
class OrganizacionesSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\organizaciones::class,6)->create();
    }
}
