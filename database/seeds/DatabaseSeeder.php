<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(OrganizacionesSedder::class);
        $this->call(Tipo_Convenio_Seeder::class);
        $this->call(Tipo_Academico_Seeder::class);
        $this->call(Convenios_Seeder::class);
        $this->call(Academicos_Seeder::class);
        $this->call(Actividades_Seeder::class);
        $this->call(Actividad_Aprendizaje_Servicios_Seeder::class);
    }
}
